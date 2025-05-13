@extends('layouts.main')

@section('title', 'Appointment App | Signup')
@section('css', 'css/login.css')
<div class="auth-wrapper d-flex pt-5">
<div class="container">
        <div class="form-section">
            <h1 class="text-center p-5">Sign Up</h1>
            <!--<p class="h1 text-center p-5 font-weight-bold text-dark">Signup</p>-->
            <div class="px-3">
                <form method="POST" action="{{ route('register.store')}}">
                    @csrf
                    <div class="row">
                        <div hidden>
                            <input type="text" class="form-control" name="role" value="admin" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstname" class="form-label text-dark">First Name:</label>
                            <input type="text" class="form-control  form-control-lg @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" />

                            @error('firstname')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="middlename" class="form-label text-dark">Middle Name:</label>
                            <input type="text" class="form-control  form-control-lg @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" />


                            @error('middlename')
                            <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control  form-control-lg @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" />


                            @error('lastname')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="phonenumber" class="form-label text-dark">Phone Number:</label>
                            <input type="text" class="form-control  form-control-lg @error('phonenumber') is-invalid @enderror" name="phonenumber"  value="{{ old('phonenumber')}}" placeholder="+63"  />


                            @error('phonenumber')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="px-3 mb-3">
                        <label for="username" class="form-label text-dark">Username:</label>
                        <input type="username" class="form-control  form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" />


                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="px-3 mb-3">
                        <label for="email" class="form-label text-dark">Email:</label>
                        <input type="email" class="form-control  form-control-lg @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" />

                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="px-3 mb-3">
                        <label for="password" class="form-label text-dark">Password:</label>
                        <input type="password" class="form-control  form-control-lg @error('password') is-ivalid @enderror" name="password"  value="{{ old('password') }}" />


                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="px-3 mb-3">
                        <label for="password" class="form-label text-dark">Password Confirmation:</label>
                        <input type="password" class="form-control  form-control-lg" name="password_confirmation" />

                    </div>
                    <div class="px-3 mb-3">
                        <label for="security_question" class="form-label text-dark">Security Question:</label>
<select id="security_question" name="security_question" class="form-control form-control-lg">
        <option value="" disabled selected>Select a security question</option>
        <option value="What is your mother’s maiden name?">What is your mother’s maiden name?</option>
        <option value="What was your first pet’s name?">What was your first pet’s name?</option>
        <option value="What is your favorite book?">What is your favorite book?</option>
    </select>
 

                        @error('security_question')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="px-3 mb-3">
                        <label for="security_answer" class="form-label text-dark">Answer:</label>
                        <input type="text" class="form-control form-control-lg @error('security_answer') is-invalid @enderror" name="security_answer" />
                        @error('security_answer')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                <div class="d-grid px-3 mt-5">
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Register</button>

                    <div class="cta-form text-center py-5 text-dark">
                        Already have an account?
                        <a href="{{ asset('/') }}" class=" text-dark text-decoration-none">Login</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
