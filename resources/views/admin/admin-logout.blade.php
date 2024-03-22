@extends('layouts.general')

@section('title', 'Appointment App | Logout')

<div class="container mt-5 p-5 ">
    <div class="row">
     <div class="col-md-7 m-auto">
         <div class="shadow-lg p-3 mb-5 bg-white rounded ">
             <div class="btn-iimg text-center pt-5 mt-5 pr-3 mr-3 mx-1 ">
                 <a href="#">
                   <img class="icon" alt="" src="{{ asset('img/icon8.png')}}" />
                  </a>
               </div>
          <div class="mt-5 my-5 text-center text-danger">
           <h1 class="">You've Log out</h1>
          </div>
          <div class="text-center mb-5">
             <p class="h2">If you want to login again Click <a href='{{ route('admin.admin-login')}}'>Here</a> to Login </p>
          </div>
         </div>
     </div>
    </div>
   </div>
  </main>
