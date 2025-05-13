<?php

// SecurityQuestionController.php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SecurityQuestionController extends Controller
{
    public function show()
    {
        if (!session('captcha_passed')) {
            return redirect()->route('auth.captcha');
        }

        $user = Auth::user();
        return view('auth.security-question', compact('user'));
    }

    public function verify(Request $request)
    {
        $request->validate([
            'security_answer' => 'required|string',
        ]);

        $user = Auth::user();
        if (strtolower($request->security_answer) === strtolower($user->security_answer)) {
            session(['security_passed' => true]);
            return redirect()->route('/login'); // adjust this to your dashboard route
        }

        return back()->withErrors([
            'security_answer' => 'Incorrect security answer.',
        ]);
    }
}

