@extends('layouts.layout')

@section('title', 'Appointment App | Signup')

<div class="auth-wrapper d-flex pt-5">
    <div class="col-md-5 m-auto ">
        <div class="bg-white shadow p-3 mb-3 bg-body-tertiary  rounded">
            <h1 class="display-3 text-center p-5 font-weight-bold text-dark">Sign Up</h1>
            <!--<p class="h1 text-center p-5 font-weight-bold text-dark">Signup</p>-->
            <div class="px-3">
                <form method="POST" action="{{ route('register.store')}}">
                    @csrf
                    <div class="row">
                        <div hidden>
                            <input type="text" class="form-control" name="role" value="1" />
                          </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstname" class="form-label text-dark">First Name:</label>
                            <input type="text" class="form-control  form-control-lg" name="firstname" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="middlename" class="form-label text-dark">Middle Name:</label>
                            <input type="text" class="form-control  form-control-lg" name="middlename" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control  form-control-lg" name="lastname" />
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="phonenumber" class="form-label text-dark">Phone Number:</label>
                            <input type="text" class="form-control  form-control-lg" name="phonenumber"  placeholder="+63"/>
                        </div>
                    </div>


                    <div class="px-3 mb-3">
                        <label for="username" class="form-label text-dark">Username:</label>
                        <input type="username" class="form-control  form-control-lg" name="username" />
                    </div>

                    <div class="px-3 mb-3">
                        <label for="email" class="form-label text-dark">Email:</label>
                        <input type="email" class="form-control  form-control-lg" name="email" />
                    </div>

                    <div class="px-3 mb-3">
                        <label for="password" class="form-label text-dark">Password:</label>
                        <input type="password" class="form-control  form-control-lg" name="password" />
                    </div>

                    <div class="px-3 mb-3">
                        <label for="password" class="form-label text-dark">Password Confirmation:</label>
                        <input type="password" class="form-control  form-control-lg" name="password_confirmation" />
                    </div>


                   <div class="d-grid px-3 mt-5">
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Register</button>

                    <div class="cta-form text-center py-5 text-dark">
                        Already have an account?
                        <a href="{{ asset('login') }}" class=" text-dark text-decoration-none">Login</a>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
