<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Business;
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
        return view('Main.business_signup');
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
        $categoryId = null;
        $categoryName = $request->category;

        // Retrieve the category with the given name
        $category = \App\Models\Category::where('name', $categoryName)->first();

        // Check if the category exists
        if ($category) {
            $categoryId = $category->id;
            // Now $categoryId contains the id of the category with the given name
        } else {
            $categoryId = 4;
            // Handle the case where the category doesn't exist
            // Maybe return an error response or set $categoryId to null
        }

        $user = PendingRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'role' => 'B',
            'description' => $request->description,
            'category_id' => $categoryId,
            'main_link' => $request->main_link,
        ]);


        // event(new Registered($user));

        // Auth::login($user);
        echo "Your Request has been Transfered Successfully. Please Wait for approval";

        // return redirect('business/pendingRequest');
    }
}
