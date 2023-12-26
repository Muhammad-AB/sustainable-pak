<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\About;
use App\Models\Blog;
use App\Models\PendingRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        // $business = Business::findOrFail($id);
        // $business1 = User::findOrFail($id)->businesses;
        // if (auth()->user()->id !== $business->user_id) {
        //     abort(403, 'Unauthorized access');
        // }

        // Retrieve the business associated with the authenticated user
        // $business = $request->user()->businesses;

        // // If the user doesn't have a business, handle accordingly
        // if (!$business) {
        //     abort(404, 'Business details not found');
        // }

        return view('Main.admin.admin_dashboard');
    }

    public function pendingRequests()
    {
        $requests = PendingRequest::all();
        return view('Main.admin.my_admin_approval', ['requests' => $requests]);
    }

    public function businesses()
    {
        $businesses = Business::all();
        return view('Main.admin.my_admin_businesses', ['businesses' => $businesses]);
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
        return redirect()->route('blog', ['id' => $blog->id])->with('success', 'About page updated successfully!');
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
            About::create([
                'name' => $request->input('name'),
                'content' => $request->input('content'),
            ]);
        } else {
            $about->update([
                'name' => $request->input('name'),
                'content' => $request->input('content'),
            ]);
        }
        return redirect()->route('admin.about')->with('success', 'About page updated successfully!');
    }
}
