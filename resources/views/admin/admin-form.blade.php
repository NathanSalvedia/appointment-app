@extends('layouts.public')

@section('title', 'Appointment App | Admin Form')

<div class="container-fluid">
    <div class="row">
      <div class=".col">
        <div class="card">
            <div class="mb-5 pt-5  text-center"><a href="#">
              <img class="icon" alt="SPC logo" src="{{ asset('img/logo7.png')}}" />
             </a></div>
            <div class="mb-5 text-center">
              <h4 class="heading">Hi Admin</h4>
            </div>
           <div class="nav">
            <ul class="list-unstyled pl-5">
              <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('admin.admin-mainpage')}}'>Home</a></li>
              <li class="pt-5 mb-2 pl-5 p-5 tex t-center"><a class="text-white" href='{{ route('admin.admin-logout')}}'>Logout</a></li>
            </ul>
           </div>
        </div>
      </div>

      <div class="container mt-5 pl-5 pt-5">
        <div class="bg-white  show-sm rounded mt-5 m-5 p-5">
          <div class="row">
            <div class="col-md-9 m-auto p-3 px-4 ">
              <div class="mt-4 my-5 ">
               <h1 class="display-6">Create an Appointment</h1>
              </div>

              <div class="mt-3">
                <form class="admin-form" id="appointmentForm">
                     <div class="mb-5">
                      <label for="date">Select Date:</label>
                      <input type="date" id="date" name="date">
                     </div>

                      <div class="mb-5">
                        <label for="timeInput" class="form-label">Select a Time:</label>
                        <input type="time" class="form-control" id="timeInput" name="timeInput" required>
                      </div>

                      <div class="" >
                        <label for="Phone" class="form-text form-label "> Contact Number:</label>
                        <input type="tel" class="form-control form-control-lg" name="phone" placeholder="+63" />
                        </div>
                </form>
                <div class="text-right">
                  <button type="button" class="btn btn-lg" id="submitBtn">Submit</button>
                </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  document.getElementById('submitBtn').addEventListener('click', function() {
    swal({
      title: "Success!",
      text: "The Appointment has been Created!",
      icon: "success",
      button: "OK"
    }).then(function() {
      window.location.href = "{{ route('admin.admin-mainpage') }}";
    });
  });
</script>
