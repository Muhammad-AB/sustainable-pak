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
    // return dashboard view
    public function dashboard(Request $request)
    {
        return view('Main.admin.admin_dashboard');
    }

    // return pending request page
    public function pendingRequests()
    {
        $requests = PendingRequest::all();
        return view('Main.admin.pending_businesses', ['requests' => $requests]);
    }

    // approve request
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

    // reject request
    public function rejectRequest($id)
    {
        $request = PendingRequest::find($id);
        $request->delete();
        return redirect()->route('admin.requests')->with('success', 'Business Request Rejected Successfully');
    }

    // return all businesses listed
    public function businesses()
    {
        $businesses = Business::all();
        return view('Main.all_businesses', ['businesses' => $businesses]);
    }

    // delete business from the database
    public function deleteBusiness($id)
    {
        $business = Business::find($id);
        $user = $business->user;
        $name = $business->user->name;
        $user->delete();
        // $businesses = Business::all();

        // return view('Main.all_businesses', ['businesses' => $businesses]);
        return redirect()->route('admin.businesses')->with('success', "Business \"$name\" deleted successfully!");
    }

    // return edit blog page
    public function editBlog($id = null)
    {
        $blog = Blog::find($id);
        return view('Main.admin.add_edit_blog', ['blog' => $blog]);
    }

    // edit blog on website
    public function updateBlog(Request $request, $id = null)
    {

        $blog = Blog::find($id);

        if (!$blog) {
            $blog = Blog::create([
                'name' => $request->input('name'),
                'content' => $request->input('content'),
            ]);
            return redirect()->route('blog', ['id' => $blog->id])->with('success', "Blog \"$blog->name\" created successfully!");
        } else {
            $blog->update([
                'name' => $request->name,
                'content' => $request->content,
            ]);
        }
        return redirect()->route('blog', ['id' => $blog->id])->with('success', "Blog \"$blog->name\" updated successfully!");
    }

    // delete blog on website
    public function deleteBlog(Request $request, $id = null)
    {

        $blog = Blog::find($id);

        $blog->delete();
        return redirect()->route('all.blogs')->with('success', "Blog \"$blog->name\" deleted successfully!");
    }

    // return edit about us page
    public function editAbout()
    {
        $about = About::first();

        return view('Main.admin.edit_about', ['about' => $about]);
    }

    // edit about us
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
        return redirect()->route('about', ['about' => $about])->with('success', 'About page updated successfully!');
    }
}
