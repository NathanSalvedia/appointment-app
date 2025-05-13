<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function show()
    {
        return view('auth.captcha');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha',
        ]);

        session(['captcha_passed' => true]);

        return redirect()->route('security.page');
    }
}
