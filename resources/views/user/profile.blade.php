@extends('layouts.public')


@section('title', 'Appointment App | Change Profile')

<div class="container-fluid">
    <div class="row">
      <div class=".col">
        <div class="card">
            <div class="mb-5 pt-5  text-center"><a href="#">
              <img class="icon" alt="" src="img/icon.png" />
             </a></div>
            <div class="mb-5 text-center">
              <h4 class="heading">Hi Kent Zorel Elnas</h4>
            </div>
           <div class="nav">
            <ul class="list-unstyled pl-5">
              <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href="dashboard.html">Dashboard</a></li>
              <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href="appointment-status.html">Appointment</a></li>
              <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href="profile.html">Settings</a></li>
              <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href="logout.html">Logout</a></li>
            </ul>
           </div>
        </div>
      </div>

      <div class="container">
        <div class="col-md-9">
          <div class="text-center mt-5 pt-5">
            <div class="fileinput fileinput-new" data-provides="fileinput">
              <div class="fileinput-new img-thumbnail" style="width: 150px; height: 150px;">
                <img src="https://via.placeholder.com/150x150" alt="...">
              </div>
              <div class="fileinput-preview fileinput-exists img-thumbnail"
                style="max-width: 150px; max-height: 150px;"></div>
              <div class="mt-2">
                <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select
                    image</span><span class="fileinput-exists">Change</span><input type="file"
                    name="profile_picture"></span>
              </div>
            </div>
          </div>
        </div>
       </div>
