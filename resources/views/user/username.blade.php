@extends('layouts.public')

@section('title', 'Appointment App | Settings | Username')

<div class=".container-fluid">
    <div class="row">
        <div class=".col">
          <div class="card">
              <div class="mb-5 pt-5  text-center"><a href="#">
                <img class="icon" alt="" src="{{ asset('img/icon.png') }}" />
               </a></div>
              <div class="mb-5 text-center">
                <h4 class="heading">Kent Zorel Elnas</h4>
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
            <div class="pt-5">
              <p class="h2">Settings</p>
            </div>
            <div class="btn-iimg text-center pt-5 mt-5 pl-5 ">
              <a href="#">
                <img class="icons" alt="" src="{{ asset('img/icon.png')}}" />
               </a>
            </div>
            <div class="form-btn text-center mt-5 pl-5 ">
              <a class="btn bnt-lg" href='{{ route('user.profile')}}' role="button">Change Profile</a>
              <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
             </div>
             <form class="form-password pl-5">
              <div class="mb-5 pt-5 my-3 col-auto pl-5">
                  <label for="username" class="form-label">User Name:</label>
                  <input type="username" class="form-control form-control-lg" name="username" id="username" />
              </div>
              <div class="mb-5 pt-5  text-right">
                <a class="btn btn-lg" href='{{ route('user.settings')}}' role="button">Back</a>
                <button type="submit" class="btn  btn-lg" value="submit">Update</button>
              </div>
          </form>
           </div>
          </div>
         </div>

</div>
