<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\About;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\PendingRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('Main.admin.admin_dashboard');
    }

    public function pendingRequests()
    {
        $requests = PendingRequest::all();
        return view('Main.admin.pending_businesses', ['requests' => $requests]);
    }

    public function approveRequest($id)
    {
        $request = PendingRequest::find($id);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'B',
        ]);

        $business = Business::create([
            // 'name' => $request->name,
            // 'description' => $request->email,
            // 'category_id' => Hash::make($request->password),
            // // 'role' => 'B',
            'description' => $request->description,
            'category_id' => $request->category_id,
            'main_link' => $request->main_link,
            'user_id' => $user->id,
        ]);

        $request->delete();

        return redirect()->route('admin.requests')->with('success', 'Business Request Approved Successfully');
    }

    public function rejectRequest($id)
    {
        $request = PendingRequest::find($id);
        $request->delete();
        return redirect()->route('admin.requests')->with('success', 'Business Request Rejected Successfully');
    }

    public function businesses()
    {
        $businesses = Business::all();
        return view('Main.my_business_list', ['businesses' => $businesses]);
    }

    public function editBlog($id = null)
    {
        $blog = Blog::find($id);
        return view('Main.admin.add_edit_blog', ['blog' => $blog]);
    }

    public function updateBlog(Request $request, $id = null)
    {

        $blog = Blog::find($id);

        if (!$blog) {
            $blog = Blog::create([
                'name' => $request->input('name'),
                'content' => $request->input('content'),
            ]);
        } else {
            $blog->update([
                'name' => $request->input('name'),
                'content' => $request->input('content'),
            ]);
        }
        return redirect()->route('blog', ['id' => $blog->id])->with('success', "Blog $blog->name updated successfully!");
    }

    public function editAbout()
    {
        $about = About::first();

        return view('Main.admin.my_admin_edit_about', ['about' => $about]);
    }

    public function updateAbout(Request $request)
    {
        $about = About::first();

        if (!$about) {
            $about = About::create([
                'name' => $request->input('name'),
                'content' => $request->input('content'),
            ]);
        } else {
            $about->update([
                'name' => $request->input('name'),
                'content' => $request->input('content'),
            ]);
        }
        return redirect()->route('about', ['about', $about])->with('success', 'About page updated successfully!');
    }
}
