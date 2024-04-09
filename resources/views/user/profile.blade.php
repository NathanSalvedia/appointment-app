@extends('layouts.public')


@section('title', 'Appointment App | Change Profile')

<div class="container-fluid">
    <div class="row">
        <div class=".col">
            <div class="card-sidebar">
                <div class=" mb-5 pt-5 pl-3"><a href="#">
                    <img  src="{{ asset('img/icon.png')}}" alt="icon"/>
                   </a></div>
                  <div class="mb-5 pl-3 text-white">
                     <p class="cta-text">Kent Zorel Elnas</p>
                  </div>
                 <div class="nav">
                  <ul class="list-unstyled">
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href='{{ route('user.status')}}'>Appointment</a></li>
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href='{{ route('user.settings')}}'>Settings</a></li>
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href='{{ route('user.logout')}}'>Logout</a></li>
                  </ul>
                 </div>
            </div>
          </div>

         <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <div class="mt-5 pt-5 pl-5">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new img-thumbnail" style="width: 250px; height: 250px;">
                              <img class="img-btn" src="https://via.placeholder.com/250x250" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists img-thumbnail"
                              style="max-width: 250px; max-height: 250px;"></div>
                          </div>
                          <div class="mt-5 pl-5 ml-5">
                            <button type="submit" class="btn  btn-lg btn--cta text-white text-decoration-none" value="submit">Select Image</button>
                          </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
