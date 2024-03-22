@extends('layouts.public')

@section('title', 'Appointment App | Settings | Password')

<div class="container-fluid">
    <div class="row">
        <div class=".col">
          <div class="card">
              <div class="mb-5 pt-5  text-center"><a href="#"><img class="icon" alt="" src="{{ asset('img/icon.png')}}" /></a></div>
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

            <div class="pt-5">
              <p class="h2">Settings</p>
            </div>

            <div class="btn-iimg text-center pt-5 mt-5 pl-5 ">
              <a href="#">
                <img class="icon" alt="" src="{{ asset('img/icon.png') }}" />
               </a>
            </div>

            <div class="form-btn text-center mt-5 pl-5 ">
              <a class="btn bnt-lg" href='{{ route('user.profile')}}' role="button">Change Profile</a>
             </div>

             <form class="form-password pl-5" id="updateForm">
              <div class="mb-5 pt-5 my-3  pl-5">
                  <label for="password" class="form-label">New  Password:</label>
                  <input type="password" class="form-control form-control-lg" name="password" id="password" />
              </div>
              <div class="mb-5 mt-5 pl-5">
                  <label for="password_confirmation" class="form-label">Confirm Password:</label>
                  <input type="password" class="form-control form-control-lg" name="password_confirmation"
                      id="password_confirmation" />
              </div>

              <div class="mb-5 pt-5  text-right ">
                <a class="btn btn-lg" id="backButton" role="button">Back</a>
                <button type="button" class="btn btn-lg" id="updateButton">Update</button>
              </div>
          </form>
           </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    document.getElementById("updateButton").addEventListener("click", function() {
        swal("Success!", "Your Password has been Successfully Changed!!.", "success")
        .then((value) => {
            window.location.href = '{{ route('user.settings') }}';
        });
    });
    document.getElementById("backButton").addEventListener("click", function() {
        window.location.href = '{{ route('user.settings') }}';
    });
</script>
