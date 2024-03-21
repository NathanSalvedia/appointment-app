@extends('layouts.second-public')

@section('title', 'Appointment App | Signup')

<
<div class="auth-wrapper d-flex pt-5">
    <div class="col-md-4 m-auto ">
        <div class="bg-white shadow p-3 mb-3 bg-body-tertiary  rounded">
            <h1 class="display-3 text-center p-5 font-weight-bold text-dark">Sign Up</h1>
            <!--<p class="h1 text-center p-5 font-weight-bold text-dark">Signup</p>-->
            <div class="px-4 pt-4 mx-4 m-3 p-5">
                <form class="form-signup">
                    <div class="mb-4">
                        <label for="username" class="form-label text-dark">Username:</label>
                        <input type="text" class="form-control  form-control-lg" name="username" />
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label text-dark">Email:</label>
                        <input type="email" class="form-control  form-control-lg  btn--form" name="email" />
                    </div>
                    <div class="mb-4 ">
                        <label for="password" class="form-label text-dark">Password:</label>
                        <input type="password" class="form-control  form-control-lg" name="password" />
                    </div>
                    <div class="mb-4 ">
                        <label for="password" class="form-label text-dark">Password Confirmation:</label>
                        <input type="password" class="form-control  form-control-lg" name="password_confirmation" />
                    </div>
                    <div class="mt-2 mb-2 pt-2 d-grid">

                        <a class="btn btn-dark btn-block"href='{{ route('user.verify-email')}}' role="button">Sign Up</a>
                        <div class="cta-form text-center py-4 text-dark">
                            Already have an account?
                            <a href="{{ asset('login') }}" class=" text-dark text-decoration-none">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
