@extends('layouts.public')

@section('title', 'Appointment App | Request ')



<div class="container-fluid">
    <div class="row">
      <div class=".col">
        <div class="card-sidebar">
             <div class="pt-3 mb-3">
                <div class="mb-5 pt-5 pl-3">
                    <img src="{{ asset('img/logo7.png')}}" alt="Profile Picture">
                 </div>
             </div>
              <div class="mb-5 pl-3 text-white">
                 <p class="cta-text" > Hi, {{  Auth::user()->firstname }}!</p>
              </div>

             <div class="nav">
              <ul class="list-unstyled">
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="status">Appointment</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('user.settings')}}">Settings</a></li>
                <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('logout')}}">Logout</a></li>
              </ul>
             </div>
        </div>
       </div>

       <div class="container">
        <div class="bg-white shadow-sm rounded mt-5 m-5 p-3">
            <div class="row">

                <div hidden>
                    <input type="text" class="form-control" name="status" value="Pending" />
                </div>

                <div hidden>
                    <input type="text" class="form-control" name="status" value="Returned" />
                </div>

                <div class="col-md-12 m-auto">
                    <div class="mt-4 mb-4">
                        <p class="cta-text font-weight-bold">Request Form</p>
                      </div>

                      <form  class="cta-form" method="POST" action="{{ route('requestforms.store')}}">
                        @csrf


                </div>
            </div>
        </div>
       </div>
  </div>
</div>




