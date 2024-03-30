@extends('layouts.public')

@section('title', 'Appointment App | Settings ')

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
        <div class="col-md-12">
            <div class="btn-iimg text-center  pt-5 mt-5 pl-5 ">
                    <a href="#">
                      <img class="icon" alt="" src="{{ asset('img/icon.png')}}" />
                     </a>
                 </div>
                  <div class="mt-5 text-right">
                   <a class="btn bnt-lg btn--cta text-white text-decoration-none" href='{{ route('user.profile')}}' role="button">Change Profile</a>
                    <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
                   </div>

                   <form class="form--cta cta-form pl-5 mt-5">
                    <div class="row my-5">
                        <div class="col-lg-4 mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="firstName" value="Kent zorel" readonly>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="firstName" class="form-label">Middle Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="middletName" value="B" readonly>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="lastName" value="Elnas" readonly>
                        </div>
                        </div>

                     <label for="username" class="form-label">User Name:</label>
                      <div class="input-group mb-5">
                        <input type="text" class="form-control form-control-lg bg-white" id="userName" value="Kentzorel" readonly>
                      </div>

                     <label for="email" class="form-text form-label"> Email:</label>
                     <div class="input-group mb-5">
                        <input type="text" class="form-control form-control-lg bg-white" id="Email" value="kentzorel2021@gmail.com" readonly>
                     </div>

                     <label for="password" class="form-label">Password:</label>
                     <div class="input-group mb-5">
                        <input type="text" class="form-control form-control-lg bg-white" id="Password" value="*********" readonly >
                     </div>

                     <label for="Phone" class="form-text form-label ">Contact Number:</label>
                     <div class="input-group" >
                        <input type="text" class="form-control form-control-lg bg-white" id="contactNumber" value="09979800852" readonly>
                     </div>
                   </form>
                  <div class="mt-5 text-right">
                    <a class="btn bnt-lg btn--cta text-white text-decoration-none" href="" role="button">Update Profile</a>
                     <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
                    </div>
                 </div>
            </div>
    </div>
 </div>

