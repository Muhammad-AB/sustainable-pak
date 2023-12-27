<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Category;
use App\Models\PendingRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class BusinessController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $categories = Category::all();

        return view('Main.business_signup', ['categories' => $categories]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // : RedirectResponse
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:' . User::class, 'unique:' . PendingRequest::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class, 'unique:' . PendingRequest::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = PendingRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'role' => 'B',
            'description' => $request->description,
            'category_id' => $request->category,
            'main_link' => $request->main_link,
        ]);


        // event(new Registered($user));

        // Auth::login($user);
        echo "Your Request has been Transfered Successfully. Please Wait for approval";

        // return redirect('business/pendingRequest');
    }

    public function dashboard(Request $request)
    {
        // $business = Business::findOrFail($id);
        // $business1 = User::findOrFail($id)->businesses;
        // if (auth()->user()->id !== $business->user_id) {
        //     abort(403, 'Unauthorized access');
        // }

        // Retrieve the business associated with the authenticated user
        $business = $request->user()->businesses;

        // If the user doesn't have a business, handle accordingly
        if (!$business) {
            abort(404, 'Business details not found');
        }

        return view('Main.business.business_dashboard', ['business' => $business]);
    }

    public function editDetails(Request $request)
    {
        // $business = Business::findOrFail($id);
        // $business = User::findOrFail($id)->businesses;
        $business = $request->user()->businesses;
        $categories = Category::all();

        // Check if the authenticated user owns the business
        if (!$business) {
            abort(404, 'Business details not found');
        }

        return view('Main.business.business_edit_details', ['business' => $business, 'categories' => $categories]);
    }
    public function saveDetails(Request $request)
    {
        $business = $request->user()->businesses;
        if (!$business) {
            abort(404, 'Business details not found');
        }

        $business->update([
            'description' => $request->description,
            'category_id' => $request->category,
            'main_link' => $request->main_link,
            'web_link' => $request->website,
            'fb_link' => $request->facebook,
            'insta_link' => $request->instagram,
            'lin_link' => $request->linkedin,
            'twitter_link' => $request->twitter,
            'product1' => $request->product1,
            'product2' => $request->product2,
            'product3' => $request->product3,
        ]);

        return redirect('business/dashboard');
    }
}
