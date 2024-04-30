@extends('layouts.layout')

@section('title', 'Appointment App | Register')

<div class="auth-wrapper d-flex pt-5">
    <div class="col-md-5 m-auto ">
        <div class="bg-white shadow p-3 mb-3 bg-body-tertiary  rounded">
            <h1 class="display-3 text-center p-5 font-weight-bold text-dark">Register</h1>
            <!--<p class="h1 text-center p-5 font-weight-bold text-dark">Signup</p>-->
            <div class="px-3">
                <form method="POST" action="{{ route('admin-register.store')}}">
                    @csrf
                        <div hidden>
                            <input type="text" class="form-control" name="role" value="0" />
                        </div>

                    <div class="px-3 mb-3">
                            <label for="name" class="form-label text-dark">Name:</label>
                            <input type="text" class="form-control  form-control-lg" />
                    </div>

                    <div class="px-3 mb-3">
                        <label for="email" class="form-label text-dark">Email:</label>
                        <input type="email" class="form-control  form-control-lg"  name="email"/>
                    </div>

                    <div class="px-3 mb-3">
                        <label for="password" class="form-label text-dark">Password:</label>
                        <input type="password" class="form-control  form-control-lg"  name="password" />
                    </div>
                    <div class="px-3 mb-3">
                        <label for="password" class="form-label text-dark">Password Confirmation:</label>
                        <input type="password" class="form-control  form-control-lg" name="password_confirmation" />
                    </div>
                   <div class="d-grid px-3 mt-5">
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Register</button>

                    <div class="cta-form text-left py-3">
                        <a href="" class=" text-dark text-decoration-none">Login</a>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
