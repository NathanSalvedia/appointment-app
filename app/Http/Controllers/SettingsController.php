<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{
    public function index()
    {
        return view('user.settings');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('user.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $user->firstname = $request->input('firstname');
        $user->middlename = $request->input('middlename');;
        $user->lastname = $request->input('lastname');;
        $user->phonenumber = $request->input('phonenumber');;
        $user->username = $request->input('username');;
        $user->email = $request->input('email');;
        $user->profile_picture = $request->input('profile_picture');;

        $firstpassword = $request->password;
        $secondpassword = $request->password_confirmation;





        if ($firstpassword == $secondpassword && !empty($firstpassword)) {
            $user->password = bcrypt($firstpassword);
        }

        // Handle file upload

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

}
