<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Override showResetForm(), reset(), sendResetLinkEmail() to disable password reset functionality
     *
     */
    public function reset()
    {
        return redirect('/');
    }

    public function showResetForm()
    {
        return redirect('/');
    }

    public function sendResetLinkEmail()
    {
        return redirect('/');
    }
}
