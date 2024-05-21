@extends('layouts.public')

@section('title', 'Appointment App | Admin Form')

<div class="container-fluid">
    <div class="row">
      <div class=".col">
        <div class="card-sidebar">
            <div class="mb-5 pt-5 pl-3"><a href="#">
                <img  src="{{ asset('img/logo7.png')}}" alt="SPC logo"/>
               </a>
            </div>
              <div class="mb-5 pl-3 text-white">
                 <p class="cta-text">Hi Admin</p>
              </div>
             <div class="nav">
              <ul class="list-unstyled">
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('admin-mainpage.displayUser')}}">Dashboard</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('admin-logout')}}">Logout</a></li>
              </ul>
             </div>
        </div>
      </div>

      <div class="container mt-5 pl-5 pt-5">
        <div class="bg-white  show-sm rounded mt-5 m-5 p-5">
          <div class="row">
            <div class="col-md-9 m-auto p-3 px-4 ">
                <div class="mt-4 mb-4">
                    <p class="cta-text font-weight-bold">Create an Appointment</p>
                </div>
              <div class="mt-3">
                <form class="admin-form" method="POST" action="{{ route('admin-form')}}">
                    @csrf


                    <input type="hidden" name="appointment_id" value="{{ request()->query('id') }}">

                     <div class="mb-5">
                      <label for="date">Select Date:</label>
                      <input type="date" id="date" name="date">
                     </div>

                      <div class="mb-5">
                        <label for="timeInput" class="form-label">Select a Time:</label>
                        <input type="time" class="form-control" id="timeInput" name="timeInput" required>
                      </div>

                      <div class="mb-5">
                        <label for="phonenumber" class="form-label text-dark">Phone Number:</label>
                        <input type="text" class="form-control  form-control-lg" name="phonenumber"  placeholder="+63" value="{{ Auth::user()->phonenumber}}">
                     </div>

                        <div class="mb-3 pt-3  text-right">
                            <button type="submit" class="btn bnt-lg btn--cta text-white text-decoration-none">Submit</button>
                      </div>


                  </form>
             </div>
             </div>
            </div>
        </div>
    </div>
  </div>

