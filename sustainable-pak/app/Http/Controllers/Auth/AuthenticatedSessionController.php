<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('Main.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        $user = $request->user();

        $request->session()->regenerate();
        if ($request->user()->role == 'A') {
            return view('Main.admin.my_admin_dash');
            // echo "Welcome $user->name";
        }

        if ($request->user()->role == 'B') {
            // echo "Welcome Business $user->name";
            return view('Main.business.my_busi_dash');
        }

        if ($request->user()->role == 'U') {
            return view('Main.home');
            // echo "Welcome $user->name";
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
