<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    // Return form: Update password
    public function updatePasswordForm()
    {
        return view('admin.updatePasswordForm');
    }

    // Update user password
    // @param: Request
    // @return: update result (alert message)
    public function updatePassword(Request $request)
    {
        // Validate params from $request->input
        $this->validate($request, [
            'current_password' => 'bail|required|string|min:6',
            'new_password' => 'required|string|min:6',
            'password_confirm' => 'required|string|min:6|same:new_password'
        ]);

        // If the new password is the same as the old one
        // return an alert message
        if ($request->input('current_password') === $request->input('new_password')) {
            $result = 'The current password and new password is the same!';
            $alert_type = 'warning';
        }
        // Else: update password in database
        // return an alert message
        else {
            $id = Auth::user()->id;
            $user = User::find($id);
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = bcrypt($request->input('new_password'));
                $user->save();

                $result = 'Password successfully updated!';
                $alert_type = 'success';
            }
            else {
                $result = 'The current password does not match!';
                $alert_type = 'warning';
            }
        }
        return view('admin.updatePasswordForm', compact('result', 'alert_type'));
    }
}
