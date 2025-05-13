@extends('layouts.main')

@section('title', 'Appointment App | OTP ')
@section('css', 'css/login.css')

<div class="auth-wrapper d-flex pt-5">
    <div class="col-md-4 m-auto p-4">
        <div class="bg-white shadow p-3 mb-4 bg-body-tertiary  rounded">
            <div class=" px-3 pt-3 mx-4 m-3 p-5">
                <h1 class="display-3 text-center font-weight-bold text-dark mb-5">OTP Verification</h1>
                <p style="color: white;">We sent a 6-digit code to your email: <strong>{{ $email }}</strong></p>
                <form action="{{ route('otp.verify') }}" method="POST">
        @csrf
        <input type="hidden" name="email" value="{{ $email }}">
        <div class="form-group mb-3">
            <input type="text" name="otp" id="otp"  class="form-control form-control-lg" placeholder="Enter OTP" maxlength="6">
            @error('otp')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mt-5  mb-2 d-grid ">
                    <!--<a class="btn btn-dark btn-block  btn-lg  " href="" role="button">Login</a>-->
                    <button type="submit" class="btn btn-dark btn-block  btn-lg">Verify OTP</button>
                 </div>
    </form>
            </div>
        </div>
    </div>
    </div>


