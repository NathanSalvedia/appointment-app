@extends('layouts.second-public')

@section('title', 'Appointment App | Signup')

<div class="auth-wrapper d-flex pt-5">
    <div class="col-md-4 m-auto ">
        <div class="bg-white shadow p-3 mb-3 bg-body-tertiary  rounded">
            <h1 class="display-3 text-center p-5 font-weight-bold text-dark">Sign Up</h1>
            <!--<p class="h1 text-center p-5 font-weight-bold text-dark">Signup</p>-->
            <div class="px-3">
                <form>
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="firstname" class="form-label text-dark">First Name:</label>
                            <input type="text" class="form-control  form-control-lg" name="firstname" />
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="middlename" class="form-label text-dark">Middle Name:</label>
                            <input type="text" class="form-control  form-control-lg" name="middlename" />
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control  form-control-lg" name="lastname" />
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="phone" class="form-label text-dark">Phone Number:</label>
                            <input type="text" class="form-control  form-control-lg" name="phone"  placeholder="+63"/>
                        </div>
                        </div>
                    </div>

                    <div class="px-3 mb-3">
                        <label for="username" class="form-label text-dark">Username:</label>
                        <input type="text" class="form-control  form-control-lg" name="username" />
                    </div>

                    <div class="px-3 mb-3">
                        <label for="email" class="form-label text-dark">Email:</label>
                        <input type="email" class="form-control  form-control-lg  btn--form" name="email" />
                    </div>

                    <div class="px-3 mb-3">
                        <label for="password" class="form-label text-dark">Password:</label>
                        <input type="password" class="form-control  form-control-lg" name="password" />
                    </div>

                    <div class="px-3 mb-3">
                        <label for="password" class="form-label text-dark">Password Confirmation:</label>
                        <input type="password" class="form-control  form-control-lg" name="password_confirmation" />
                    </div>

                </form>

                <div class="d-grid px-3 mt-5">
                    <button type="submit" class="btn btn-dark btn-block" id="signupForm">Sign Up</button>
                    <div class="cta-form text-center py-5 text-dark">
                        Already have an account?
                        <a href="{{ asset('login') }}" class=" text-dark text-decoration-none">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
