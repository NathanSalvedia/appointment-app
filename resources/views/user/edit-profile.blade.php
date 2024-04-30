@extends('layouts.public')

<div class="container-fluid">
    <div class="row">
         <div class=".col">
           <div class="card-sidebar">
               <div class=" mb-5 pt-5 pl-3"><a href="#">
                 <img  src="{{ asset('img/icon.png')}}" alt="icon"/>
                </a></div>
               <div class="mb-5 pl-3 text-white">
                  <p class="cta-text"> Hi, {{  Auth::user()->firstname }}!</p>
               </div>
              <div class="nav">
               <ul class="list-unstyled">
                 <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
                 <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="status">Appointment</a></li>
                 <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="user.settings">Settings</a></li>
                 <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="" id="loginLink">Logout</a></li>
               </ul>
              </div>
           </div>
         </div>


         <div class="container">
          <div class="row">
            <div class="mt-5">
                <h1>Edit Profile</h1>
            </div>
            <div class="offset-md-1 mb-5 col-md-10">
                <img src="{{ asset('img/icon.png')}}" class="float-right" alt="user-profile">
            </div>

            <div class="col-md-12">
                <form class="form--cta cta-form pl-3">
                    <div class="row">
                        <div class="col-md-6 mb-3 mt-2">
                            <label for="firstname" class="form-label text-dark">First Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="firstName" value="{{ Auth::user()->firstname }}" enabled>
                        </div>

                        <div class="col-md-6 mb-3 mt-2">
                            <label for="middlename" class="form-label text-dark">Middle Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="middletName" value="{{ Auth::user()->middlename }}" enabled>
                        </div>

                        <div class="col-md-6 mb-3 mt-2">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="lastName" value="{{ Auth::user()->lastname }}" enabled>
                        </div>

                        <div class="col-md-6 mb-3 mt-2">
                            <label for="phone" class="form-label text-dark">Phone Number:</label>
                            <input type="text" class="form-control  form-control-lg" name="phonenumber"  placeholder="+63"  value="{{ Auth::user()->phonenumber }}" enabled/>
                        </div>
                    </div>

                    <div class="mb-4 mt-2">
                        <label for="username" class="form-label text-dark">Username:</label>
                        <input type="text" class="form-control  form-control-lg" name="username" />
                    </div>

                    <div class="mb-4 mt-2">
                        <label for="email" class="form-label text-dark">Email:</label>
                        <input type="email" class="form-control  form-control-lg  btn--form" name="email" />
                    </div>

                    <div class="mb-4 mt-2">
                        <label for="password" class="form-label text-dark">Password:</label>
                        <input type="password" class="form-control  form-control-lg" name="password" />
                    </div>


                   <div class="mt-4 mb-3 float-right">
                    <a class="btn btn-lg btn--cta text-white text-decoration-none" href="user.settings" role="button">Cancel</a>
                    <button type="button" class="btn btn-lg btn--cta text-white text-decoration-none">Save</button>
                     <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
                   </div>
                </form>
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


