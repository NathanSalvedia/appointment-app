@extends('layouts.public')


<div class="container-fluid">
    <div class="row">
        <div class=".col">
            <div class="card-sidebar d-flex flex-column" style="height: 100vh;">
              <div class="pt-3 mb-3">
                <div class="mb-5 pt-5 pl-3">
                  <img src="{{ asset('img/logo7.png')}}" alt="Profile Picture">
                </div>
              </div>
              <div class="mb-5 pl-3 text-white">
                <p class="cta-text">Hi, {{ Auth::user()->firstname }}!</p>
              </div>
              <div class="nav flex-grow-1">
                <ul class="list-unstyled">
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('user.notification')}}">Inbox</a></li>
                  <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
                  <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="status">Appointment</a></li>
                  <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('user.settings')}}">Settings</a></li>
                </ul>
              </div>
              <div class="mt-auto mb-5 pl-3">
                <ul class="list-unstyled">
                  <li class="pl-3"><a class="text-white text-decoration-none" href="{{ route('logout')}}" style="font-size: 1.8rem;">Logout</a></li>
                </ul>
              </div>x
            </div>
          </div>
        <div class="container">
            <div class="row">
                <div class="mt-5">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group pt-5 mt-5">
                    <form class="form--cta cta-form pl-3" method="POST" action="{{ route('edit-profile.updateProfile') }}">
                        @csrf
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="d-flex justify-content-end" style="position: relative; left: 280px;">
                            <div class="fileinput-new img-thumbnail" style="width: 150px; height: 150px;">
                                @if(Auth::check() && Auth::user()->profile_picture)
                                <img src="{{ asset('img/' . Auth::user()->profile_picture) }}" alt="Profile Picture">
                            @endif

                            </div>
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 150px; max-height: 150px;"></div>
                        <div class="mt-4">
                            <span class="btn--cta btn-lg btn-file" style="position: relative; left: 280px;">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="profile_picture" id ="profile_picture">
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
                            <input type="text" class="form-control form-control-lg" name="username" id="username" />


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

