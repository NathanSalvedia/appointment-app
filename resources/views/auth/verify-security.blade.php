@extends('layouts.main')

@section('title', 'Appointment App | Security ')
@section('css', 'css/login.css')

<div class="auth-wrapper d-flex pt-5">
    <div class="container">
        <div class="bg-white shadow p-3 mb-4 bg-body-tertiary  rounded">
            <div class=" px-3 pt-3 mx-4 m-3 p-5">
                <h1 class="display-3 text-center font-weight-bold text-dark mb-5">Security Question</h1>
                <form method="POST" action="/verify-security">
            @csrf
            <label class="input-container"><h1 style="color: black; font-size: 30px; margin-bottom: 20px;">{{ $question }}</h1></label>

            <div class="mb-2">
                    <input type="text"  class="form-control form-control-lg" placeholder="Enter Your Answer"  name="security_answer">
            @error('security_answer')
                <div class="error-message">{{ $message }}</div>
            @enderror
            </div>
            <div class="mt-5 mb-2 d-grid ">
                    <!--<a class="btn btn-dark btn-block  btn-lg  " href="" role="button">Login</a>-->
                    <button type="submit" class="btn btn-dark btn-block  btn-lg">Verify</button>
                 </div>
        </form>
            </div>
        </div>
    </div>
    </div>


