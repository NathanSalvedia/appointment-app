<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function show(){


        return view('admin.admin-login');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

           ]);


           if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin-mainpage');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


      }


      public function adminlogout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin-login');




    }

}
