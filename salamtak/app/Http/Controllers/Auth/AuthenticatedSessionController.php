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
        return view('auth.login');
    }

/**
 * Handle an incoming authentication request.
 */
public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();

    $request->session()->regenerate();

    $user = Auth::user();

    // Redirect based on user's role
    switch ($user->role) {
        case 'user':
            // Redirect to the same page
            return redirect()->intended(RouteServiceProvider::HOME);
        case 'hospital':
            // Redirect to salam.tamimi99@gmail.com
            return redirect('/hospitals-details');
        case 'doctor':
            // Redirect to profile-doctor
            return redirect('/profile-doctor');
        case 'admin':
            // Redirect to hospitals-admin
            return redirect('/hospitals-admin');
        default:
            // Redirect to the default path
            return redirect('/')->intended(RouteServiceProvider::HOME);
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
