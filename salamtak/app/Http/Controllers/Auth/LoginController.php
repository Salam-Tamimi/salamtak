<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // Check if the user has the 'user' role and if there is a stored previous URL
        if ($user->role === 'user' && Session::has('previous_url')) {
            // Redirect the user to the stored URL
            return redirect(Session::pull('previous_url'));
        }
    
        // If there is no stored URL or the user does not have the 'user' role,
        // redirect based on the user's role
        switch ($user->role) {
            case 'user':
                return '/';
            case 'hospital':
                return '/hospital-details';
            case 'doctor':
                return '/profile-doctor';
            case 'admin':
                return '/hospitals-admin';
            default:
                // Redirect to the default path if role is not recognized
                return $this->redirectTo;
        }
    }
    

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        Session::put('previous_url', url()->previous());

        return view('admin.pages.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    // protected function storePreviousUrl(Request $request)
    // {
    //     Session::put('previous_url', url()->previous());
    // }

    
}
