@extends('layouts.main')

@section('title', 'Appointment App | Captcha ')
@section('css', 'css/login.css')

<div class="auth-wrapper d-flex pt-5">
    <div class="container">
        <div class="bg-white shadow p-3 mb-4 bg-body-tertiary  rounded">
            <div class=" px-3 pt-3 mx-4 m-3 p-5">
                <h1 class="display-3 text-center font-weight-bold text-dark mb-5">Verify You're Human</h1>
                <form method="POST" action="{{ url('/verify-captcha') }}">
        @csrf

        <div class="mb-5 text-center">
            <div id="captcha-img" >{!! captcha_img('flat') !!}</div>
        </div>
        <div class="mb-2">
                    <input type="text"  class="form-control form-control-lg" placeholder="Enter CAPTCHA"  name="g-recaptcha-response">
        </div>
@error('g-recaptcha-response')
                <div class="error-message">{{ $message }}</div>
            @enderror
            @error('security_answer')
        <div class="error-message">{{ $message }}</div>
    @enderror
    <br>
        {{-- I am not a robot checkbox --}}
        <div class="form-check mt-10">
            <input class="form-check-input" type="checkbox" name="not_robot" id="not_robot" value="1" required>
            <label class="form-check-label" for="not_robot">
                I'm not a robot
            </label>

            @error('not_robot')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="mt-2 mb-2 d-grid ">
                    <!--<a class="btn btn-dark btn-block  btn-lg  " href="" role="button">Login</a>-->
                    <button type="submit" class="btn btn-dark btn-block  btn-lg">Verify</button>
                 </div>
          
    </form>
            </div>
        </div>
    </div>
    </div>


