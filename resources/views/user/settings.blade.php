@extends('layouts.public')

@section('title', 'Appointment App | Settings ')

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
                <h1>Settings</h1>
            </div>
            <div class="col-md-12">

                <div class="form-group pt-5 mt-5">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="d-flex justify-content-end" style = "position: relative; left: 600px;">
                        <div class="fileinput-new img-thumbnail" style="width: 220px; height: 220px;">
                       @if(Auth::check() && Auth::user()->profile_picture)
                        <img src="{{ asset('img/' . Auth::user()->profile_picture) }}" alt="Profile Picture" style ="width: 200px; height: 200px;">
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
