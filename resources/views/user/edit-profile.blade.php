@extends('layouts.public')
@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif


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
                <div class="mt-5">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group pt-5 mt-5">
                <form class="form--cta cta-form pl-3" method="POST" action="{{ route('user.update-profile') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="d-flex justify-content-end" style="position: relative; left: 280px;">
                            <div class="fileinput-new img-thumbnail" style="width: 150px; height: 150px;">
                            @if(Auth::check())
                            <img src="{{ Auth::user()->profile_picture 
    ? asset('images/profile/' . Auth::user()->profile_picture) . '?t=' . time() 
    : asset('images/profile/default.png') }}" 
    alt="Profile Picture" 
    style="width: 100%; height: 100%; object-fit: cover;">
                                    @endif

                            </div>
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 150px; max-height: 150px;"></div>
                        <div class="mt-4">
                                <span class="btn--cta btn-lg btn-file" style="position: relative; left: 280px;">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="profile_picture" id="profile_picture">
                                </span>
                            <a href="#" class="btn--cta btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-6 mb-3 mt-2">
                                <label for="firstname" class="form-label text-dark">First Name:</label>
                                <input type="text" class="form-control form-control-lg bg-white" id="firstname" name="firstname" value="{{ Auth::user()->firstname }}">
                            </div>

                            <div class="col-md-6 mb-3 mt-2">
                                <label for="middlename" class="form-label text-dark">Middle Name:</label>
                                <input type="text" class="form-control form-control-lg bg-white" id="middlename" name="middlename" value="{{ Auth::user()->middlename }}">
                            </div>

                            <div class="col-md-6 mb-3 mt-2">
                                <label for="lastname" class="form-label text-dark">Last Name:</label>
                                <input type="text" class="form-control form-control-lg bg-white" id="lastname" name="lastname" value="{{ Auth::user()->lastname }}">
                            </div>

                            <div class="col-md-6 mb-3 mt-2">
                                <label for="phone" class="form-label text-dark">Phone Number:</label>
                                <input type="text" class="form-control form-control-lg" name="phonenumber" id="phonenumber" placeholder="+63" value="{{ Auth::user()->phonenumber }}">
                            </div>
                        </div>

                        <div class="mb-4 mt-2">
                            <label for="username" class="form-label text-dark">Username:</label>
                            <input type="text" class="form-control form-control-lg"  name="username" id="username" value="{{ Auth::user()->username }}" />


                        </div>

                        <div class="mb-4 mt-2">
                            <label for="email" class="form-label text-dark">Email:</label>
                            <input type="email" class="form-control form-control-lg btn--form" name="email" value="{{ Auth::user()->email }}" />
                        </div>

                        <div class="mb-4 mt-2">
                            <label for="password" class="form-label text-dark">Password:</label>
                            <input type="password" class="form-control form-control-lg" name="password" />

                        </div>

                        <div class="mb-4 mt-2">
                            <label for="password_confirmation" class="form-label text-dark">Password Confirmation:</label>
                            <input type="password" class="form-control form-control-lg" name="password_confirmation" />
                        </div>

                        <div class="mt-4 mb-3 float-right">
                            <a class="btn btn-lg btn--cta text-white text-decoration-none" href="{{ route('user.settings') }}" role="button">Cancel</a>
                            <button type="submit" class="btn btn-lg btn--cta text-white text-decoration-none">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

