<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\SendOtpMail; 

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        $user = User::where('email', $request->email)->first();
        $attempts = session()->get('login_attempts_' . $request->email, 0);
    
        if (!$user || !Hash::check($request->password, $user->password)) {
            $attempts++;
            session()->put('login_attempts_' . $request->email, $attempts);
        
            if ($attempts >= 3 && $user) {
                $otp = rand(100000, 999999);
                session()->put('otp_' . $request->email, $otp);
                session()->put('otp_expires_' . $request->email, now()->addMinutes(10));
                session()->put('email', $request->email);
        
                Mail::to($request->email)->send(new SendOtpMail($otp));
        
                if ($request->ajax()) {
                    return response()->json(['redirect' => '/verify-otp']);
                }
        
                return redirect('/verify-otp')->with('email', $request->email);
            }
        
            $message = 'Invalid credentials. Attempt ' . $attempts . ' of 3';
            if ($request->ajax()) {
                return response()->json(['error' => $message], 422);
            }
        
            return back()->withErrors(['email' => $message]);
        }
        
    
        // Successful login — clear attempts and set next step
        session()->forget('login_attempts_' . $request->email);
        session(['login_step' => 'captcha']); // ✅ IMPORTANT FIX
    
        Auth::login($user); // ✅ Login user
    
        if ($request->ajax()) {
            return response()->json(['redirect' => '/verify-captcha']);
        }
    
        return redirect('/verify-captcha');
    }
    
    public function showCaptcha()
    {
        if (session('login_step') !== 'captcha') {
            return redirect('/'); // If login step isn't 'captcha', redirect to homepage or login
        }
    
        return view('auth.verify-captcha'); // Show captcha page
    }
    
    public function showSecurityQuestion()
    {
        if (session('login_step') !== 'security') return redirect('/');
        $user = Auth::user();
        return view('auth.verify-security', ['question' => $user->security_question]);
    }


    public function processSecurityQuestion(Request $request)
    {
        $request->validate([
            'security_answer' => 'required',
        ]);
    
        $user = Auth::user();
    
        if (Hash::check($request->security_answer, $user->security_answer)) {
            session()->forget('login_step');
    
            // 🔐 Regenerate session to prevent session fixation
            $request->session()->regenerate();
    
            // ✅ Ensure user remains authenticated
            Auth::login($user);
    
            // ✅ Redirect to main page
            return redirect('/mainpage');
        }
    
        // ❌ If answer is incorrect, fallback to CAPTCHA again
        session(['login_step' => 'captcha']);
        return redirect('/verify-captcha')->withErrors([
            'security_answer' => 'Incorrect answer. Please verify you are human again.'
        ]);
    }
    
public function processCaptcha(Request $request)
{
    $validator = Validator::make($request->all(), [
        'g-recaptcha-response' => 'required|captcha',
        'not_robot' => 'accepted',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    // ✅ Clear OTP only now
    $email = session('email');
    session()->forget('otp_' . $email);
    session()->forget('otp_expires_' . $email);

    session(['login_step' => 'security']);
    return redirect('/verify-security');
}

public function showOtpForm(Request $request)
{
    $email = $request->session()->get('email');
    return view('auth.verify-otp', compact('email'));
}

public function verifyOtp(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'otp' => 'required|digits:6',
    ]);

    $user = User::where('email', $request->email)->first();
    $sessionOtp = session()->get('otp_' . $request->email);
    $expiresAt = session()->get('otp_expires_' . $request->email);

    if ($user && $sessionOtp == $request->otp && now()->lessThan($expiresAt)) {
        // ✅ Don't forget OTP yet, keep it until CAPTCHA succeeds
        session(['login_step' => 'captcha']);
        Auth::login($user);
    
        return redirect('/verify-captcha');
    }
    

    return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/'); // or wherever you want to go after logout
}
}
