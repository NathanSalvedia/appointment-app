@extends('layouts.public')

@section('title', 'Appointment App | Settings ')

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
              <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.settings')}}'>Settings</a></li>
              <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.logout')}}'>Logout</a></li>
            </ul>
           </div>
        </div>
      </div>

       <div class="container">
        <div class="col-md-9">
            <div class="">
                <div class="btn-iimg text-center  pt-5 mt-5 pl-5 ">

                    <a href="#">
                      <img class="icon" alt="" src="{{ asset('img/icon.png')}}" />
                     </a>
                  </div>
                  <div class="form-btn text-center mt-5 pl-5 ">

                   <a class="btn bnt-lg" href='{{ route('user.profile')}}' role="button">Change Profile</a>

                    <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
                   </div>

                   <form class="form-password pl-5 mt-5">

                    <label for="username" class="form-label">User Name:</label>
                    <div class="input-group mb-5">
                        <input type="username" class="form-control form-control-lg" name="username" id="username" />
                        <span class="input-group-addon">
                          <a href='{{ route('user.username')}}' class="btn btn-lg" title="Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>

                    <label for="email" class="form-text form-label"> Email:</label>
                    <div class="input-group mb-5">
                        <input type="email" class="form-control form-control-lg" name="email" id="email" />
                        <span class="input-group-addon">
                          <a href='{{ route('user.email')}}'' class="btn bnt-lg" title="Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>

                    <label for="password" class="form-label">Password:</label>
                    <div class="input-group mb-5">
                        <input type="password" class="form-control form-control-lg" name="password" id="password" />
                        <span class="input-group-addon">
                          <a href='{{ route('user.password')}}' class="btn btn-lg" title="Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>

                    <label for="Phone" class="form-text form-label ">Contact Number:</label>
                    <div class="input-group" >
                        <input type="tel" class="form-control form-control-lg" name="phone" placeholder="+63" />
                        <span class="input-group-addon">
                          <a href='{{ route('user.contact')}}' class="btn btn-lg" title="Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>
                </div>
                </form>
            </div>
         </div>
        </div>
       </div>
