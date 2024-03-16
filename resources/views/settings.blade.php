@extends('layouts.public')

<div class="container-lg">
    <div class="row">
      <div class=".col-md-4">
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
          <div class="pt-5">
            <p class="h2">Settings</p>
          </div>
          <div class="col-md-9">
            <div class="">
                <div class="btn-iimg text-center  pt-5 mt-5 pl-5 ">

                    <a href="#">
                      <img class="icon" alt="" src="img/icon.png" />
                     </a>
                  </div>
                  <div class="form-btn text-center mt-5 pl-5 ">

                   <a class="btn bnt-lg" href="change-profile.html" role="button">Change Profile</a>

                    <!--<button  type="submit" class="btn  btn-lg">Change Profile</button>-->
                   </div>

                   <form class="form-password pl-5 mt-5">

                    <label for="username" class="form-label">User Name:</label>
                    <div class="input-group mb-5">
                        <input type="username" class="form-control form-control-lg" name="username" id="username" />
                        <span class="input-group-addon">
                          <a href="username.html" class="btn btn-outline-secondary p-2 mb-2 " title="Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>

                    <label for="email" class="form-text form-label"> Email:</label>
                    <div class="input-group mb-5">
                        <input type="email" class="form-control form-control-lg" name="email" id="email" />
                        <span class="input-group-addon">
                          <a href="email.html" class="btn btn-outline-secondary p-2 mb-2 " title="Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>

                    <label for="password" class="form-label">Password:</label>
                    <div class="input-group mb-5">
                        <input type="password" class="form-control form-control-lg" name="password" id="password" />
                        <span class="input-group-addon">
                          <a href="update-password.html" class="btn btn-outline-secondary p-2 mb-2 " title="Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>

                    <label for="Phone" class="form-text form-label ">Contact Number:</label>
                    <div class="input-group" >
                        <input type="tel" class="form-control form-control-lg" name="phone" placeholder="+63" />
                        <span class="input-group-addon">
                          <a href="contact.html" class="btn btn-outline-secondary p-2 mb-2" title="Edit"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>
                </div>
                </form>
            </div>
       </div>
    </div>
  </div>
