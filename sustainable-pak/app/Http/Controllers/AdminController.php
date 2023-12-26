<?php

namespace App\Http\Controllers;

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

        return view('Main.admin.my_admin_dash');
    }
    public function pendingRequests(Request $request)
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
        $requests = PendingRequest::all();
        return view('Main.admin.my_admin_approval',['requests' => $requests]);
    }
}
