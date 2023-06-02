<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::id());
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        // Update other fields as needed
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {

        $user = User::find(Auth::id());


        if (Hash::check($request->current_password, $user->password)) {

            if ($request->new_password === $request->new_password_confirmation) {

                $user->password = Hash::make($request->new_password);
                // $user->password = $request->new_password;
                $user->save();

                return redirect()->back()->with('success', 'Password updated successfully!');

            } else {

                return redirect()->back()->with('error', 'New password and confirm password do not match.');
            }
            
        } else {
            // $test = User::find(Auth::id());
            // dd($test);
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }
    }
}
