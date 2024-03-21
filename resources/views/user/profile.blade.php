@extends('layouts.public')


@section('title', 'Appointment App | Change Profile')

<div class="container-fluid">
    <div class="row">
        <div class=".col">
            <div class="card">
                <div class="mb-5 pt-5  text-center"><a href="#">
                  <img class="icon" alt="" src="{{ asset('img/icon.png')}}" />
                 </a></div>
                <div class="mb-5 text-center">
                  <h4 class="heading"> Kent Zorel Elnas</h4>
                </div>
               <div class="nav">
                <ul class="list-unstyled pl-5">
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href="{{ asset('mainpage')}}">Home</a></li>
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.status')}}'>Appointment</a></li>
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{route('user.settings')}}'>Settings</a></li>
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.logout')}}'>Logout</a></li>
                </ul>
               </div>
            </div>
          </div>

         <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <div class="mt-5 pt-5 pl-5">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new img-thumbnail" style="width: 150px; height: 150px;">
                              <img class="img-btn" src="https://via.placeholder.com/150x150" alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists img-thumbnail"
                              style="max-width: 150px; max-height: 150px;"></div>
                          </div>
                          <div class="mt-5">
                            <button type="submit" class="btn  btn-lg" value="submit">Select Image</button>
                          </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

