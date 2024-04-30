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
               <p class="cta-text">  Hi, {{  Auth::user()->firstname }}!</p>
            </div>
           <div class="nav">
            <ul class="list-unstyled">
              <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
              <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="status">Appointment</a></li>
              <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="">Settings</a></li>
              <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="" id="loginLink">Logout</a></li>
            </ul>
           </div>
        </div>
      </div>

       <div class="container">
        <div class="row">
            <div class="mt-5">
                <h1>Settings</h1>
            </div>
            <div class="col-md-12">
                <div class="btn-iimg text-center  pt-5 mt-5 pl-5 ">
                          <img class="icon" alt="" src="{{ asset('img/icon.png')}}" />
                     </div>
                      <div class="mt-5 text-right">
                       <a class="btn bnt-lg btn--cta text-white text-decoration-none" href="user.profile" role="button">Change Profile</a>
                        <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
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
                        <a class="btn bnt-lg btn--cta text-white text-decoration-none" href="{{ route('settings.create')}}" role="button">Edit Profile</a>
                         <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
                        </div>
            </div>
        </div>
       </div>
    </div>
 </div>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script>
     document.getElementById("loginLink").addEventListener("click", function(event) {
         event.preventDefault();
         swal("Are you sure you want to Logout?", {
             buttons: ["Cancel", true],
         }).then((value) => {
             if (value) {
                 window.location.href = "{{ route('login') }}";
             }
         });
     });
 </script>
