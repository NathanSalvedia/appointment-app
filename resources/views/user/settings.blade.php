@extends('layouts.main')

@section('title', 'Appointment App | Settings')
@section('css', 'css/general.css')

<div class="container-fluid">
 <div class="row">
    <div class=".col">
        <div class="card-sidebar d-flex flex-column" style="height: 100vh;">
          <div class="pt-3 mb-3">
          <div class="logo3">
                  <img src="{{ Auth::user()->profile_picture 
    ? asset('images/profile/' . Auth::user()->profile_picture) . '?t=' . time() 
    : asset('images/profile/default.png') }}" alt="Profile Picture">
                </div>
              </div>
              <div class="mb-5 pl-3 text-white">
                <h1 class="username-text">Hi, {{ Auth::user()->firstname }}!</h1>
              </div>
          <div class="container">
        @include('layouts.navbar.sidenavbar')
        @yield('content1')
    </div>
                <div class="navbar-collapse" id="navbar-toggler">
                <ul class="navbar-nav ml-auto main-nav-list">
                <li style="  list-style: none; display: flex; margin-top: 55px; margin-left: 20px; transition: all 0.3s;">
                <a class="nav-item main-nav-link " href="{{ route('logout') }}">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
       <div class="container">
        <div class="row">
            <div class="text">
                <h1>Settings</h1>
            </div>
            <div class="col-md-12">

                <div class="form-group pt-5 mt-5">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="d-flex justify-content-end" style = "position: relative; left: 600px;">
                        <div class="fileinput-new img-thumbnail" style="width: 220px; height: 220px;">
                       @if(Auth::check() && Auth::user()->profile_picture)
                        <img src="{{ Auth::user()->profile_picture 
    ? asset('images/profile/' . Auth::user()->profile_picture) . '?t=' . time() 
    : asset('images/profile/default.png') }}" alt="Profile Picture" style ="width: 200px; height: 200px;   border-radius: 100%;">
                    @endif
                        </div>
                      </div>
                      <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 220px; max-height: 220px;"></div>
                    </div>
                  </div>

                       <form class="form--cta cta-form pl-5 mt-5">
                        <div class="row my-5">
                            <div class="col-md-4 mb-3">
                                <label for="firstName" class="form-label">First Name:</label>
                                <input type="text" class="form-control form-control-lg bg-white" id="firstName" value="{{ Auth::user()->firstname }}" disabled>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="firstName" class="form-label">Middle Name:</label>
                                <input type="text" class="form-control form-control-lg bg-white" id="middletName" value="{{ Auth::user()->middlename }}" disabled>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="lastname" class="form-label text-dark">Last Name:</label>
                                <input type="text" class="form-control form-control-lg bg-white" id="lastName" value="{{ Auth::user()->lastname }}" disabled >
                            </div>
                            </div>

                         <label for="username" class="form-label">User Name:</label>
                          <div class="input-group mb-5">
                            <input type="text" class="form-control form-control-lg bg-white" id="userName" value="{{ Auth::user()->username}}" disabled >
                          </div>

                         <label for="email" class="form-text form-label"> Email:</label>
                         <div class="input-group mb-5">
                            <input type="text" class="form-control form-control-lg bg-white" id="Email" value="{{ Auth::user()->email }}" disabled>
                         </div>

                         <label for="Phone" class="form-text form-label ">Contact Number:</label>
                         <div class="input-group" >
                            <input type="text" class="form-control form-control-lg bg-white" id="contactNumber" value="{{ Auth::user()->phonenumber}}" disabled>
                         </div>
                       </form>
                      <div class="mt-5 text-right">
                        <a class="btn bnt-lg btn--cta text-white text-decoration-none" href="{{ Route('user.edit-profile')}}" role="button">Update  Profile</a>
                         <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
                        </div>
            </div>
        </div>
       </div>
    </div>
 </div>
 <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
 <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet">