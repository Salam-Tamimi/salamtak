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
        // try {
        //     $googleUser = Socialite::driver('google')->user();
        // } catch (\Exception $e) {
        //     return redirect()->route('login')->with('error', 'Unable to authenticate with Google.');
        // }
        try {
            $googleUser = Socialite::driver('google')->user();
            // dd($googleUser); // Debugging statement
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Unable to authenticate with Google.');
        }

        // Check if a user with this Google ID already exists
        $existingUser = User::where('google_id', $googleUser->id)->first();

        if ($existingUser) {
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

        return redirect()->route('dashboard');
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
