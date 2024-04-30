@extends('layouts.layout')

@section('title', 'Appointment App | Login ')

<div class="auth-wrapper d-flex pt-3 my-3">
    <div class="col-md-4 m-auto p-4 mt-3">
        <div class="bg-white shadow p-3 mb-4 bg-body-tertiary  rounded">
            <div class="text-center pt-5" >
                <a>
                <img class="logo" alt="" src="{{ asset('img/logo9.png')}}" />
                </a>
            </div>
            <div class=" px-3 pt-3 mx-4 m-3 p-5">
                <h1 class="display-3 text-center p-5 font-weight-bold text-dark">Login</h1>
                <!--<p class="h1 text-center p-5 font-weight-bold  text-black">Login</p>-->
                <form class="form-login" method="POST" action="{{ route('admin-login')}}">
                    @csrf
                 <div class="mb-5">
                    <label for="email" class="form-text form-label"></label>
                    <input type="email" placeholder="Email:" class="form-control  form-control-lg" id="email" name="email" />
                 </div>
                 <div class="mb-5">
                    <label for="password" class="form-text form-label"></label>
                    <input type="password"  class="form-control form-control-lg" placeholder="Password:" id="password" name="password" />
                 </div>

                 <div class="mb-3 d-flex justify-content-between align-items-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="remember" value="true" id="customCheck1">
                        <label class="custom-control-label text-black-50" for="customCheck1">Remember me</label>
                     </div>
                 </div>

                 <div class="mt-4 mb-4 d-grid ">
                    <!--<a class="btn btn-dark btn-block  btn-lg" href="admin.admin-mainpage" role="button">Login</a>-->
                    <button type="submit" class="btn btn-block btn-dark bnt-lg">Login</button>
                 </div>

                 <div class="cta-form text-left ">
                    <a href=""
                    class="text-dark text-decoration-none">Register</a>
                </div>
                </div>
              </form>
            </div>
        </div>
    </div>
    </div>
