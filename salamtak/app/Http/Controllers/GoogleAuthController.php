<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
      /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleGoogleCallback()
{
    try {
        $googleUser = Socialite::driver('google')->user();
    } catch (\Exception $e) {
        return redirect()->route('login')->with('error', 'Unable to authenticate with Google.');
    }

    // Check if a user with this Google ID or email already exists
    $existingUser = User::where('google_id', $googleUser->id)->orWhere('email', $googleUser->email)->first();

    if ($existingUser) {
        // Update existing user information if necessary
        $existingUser->update([
            'name' => $googleUser->name,
            'google_id' => $googleUser->id,
            // You may set other fields here as needed
        ]);

        auth()->login($existingUser);
    } else {
        // Create a new user in the database
        $newUser = User::create([
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'google_id' => $googleUser->id,
            // You may set other fields here as needed
        ]);

        auth()->login($newUser);
    }

    // Redirect based on user role
    $user = auth()->user();

    if ($user->role === 'user') {
        // Redirect to the same page opened before login
        return redirect()->intended('/');
    } elseif ($user->role === 'hospital') {
        return view('hospital.pages.hospitals-details.index');
    } elseif ($user->role === 'doctor') {
        return view('doctor-details.index');
    } elseif ($user->role === 'admin') {
        return view('admin.pages.hospitals-admin.index');
    }
}
    

    /**
     * Log the user out.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
