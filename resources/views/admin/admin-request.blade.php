@extends('layouts.public')

<div class="container-fluid">
    <div class="row">
        <div class=".col">
            <div class="card-sidebar">
                <div class="mb-5 pt-5 pl-3"><a href="#">
                    <img  src="{{ asset('img/logo7.png')}}" alt="SPC logo"/>
                   </a>
                </div>
                  <div class="mb-5 pl-3 text-white">
                     <p class="cta-text">Hi Admin</p>
                  </div>
                 <div class="nav">
                  <ul class="list-unstyled">
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('admin.admin-mainpage')}}">Dashboard</a></li>
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="">Logout</a></li>
                  </ul>
                 </div>
            </div>
          </div>


          <div class="container py-4">
            <div class="bg-white shadow-sm rounded mt-5 p-5">
              <div class="row">
                 <div class="col-md-11 m-auto">
                    <div class="mt-4 mb-4">
                        <p class="cta-text font-weight-bold">Inbox</p>
                      </div>

                     <form action="" class="cta-form">
                        <div class="row my-3">
                            <div class="col-lg-3  mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="firstName" value="Kent zorel" readonly>
                        </div>

                        <div class="col-md-3  mb-3">
                            <label for="firstName" class="form-label">Middle Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="middletName" value="B" readonly>
                        </div>

                        <div class="col-md-3  mb-3">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="lastName" value="Elnas" readonly>
                        </div>

                        <div class="col-md-3  mb-3">
                            <label for="phone" class="form-label text-dark">Phone Number:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="contactNumber" value="09979800852" readonly>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="username" class="form-label">User Name:</label>
                                <div class="input-group mb-5">
                                  <input type="text" class="form-control form-control-lg bg-white" id="userName" value="Kentzorel" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-text form-label"> Email:</label>
                                <div class="input-group mb-5">
                                <input type="text" class="form-control form-control-lg bg-white" id="Email" value="kentzorel2021@gmail.com" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <p class="h2 text-lg-left">Subject: Request for COR</p>
                        </div>

                        <div class="form-group mt-3 pt-4">
                            <img src="{{ asset('img/receipt.jpg')}}" width="250px" height="160px" />
                         </div>

                         <div class="form-floating mt-4">
                            <label for="floatingPlaintextInput">Purpose:</label>
                            <input type="text" readonly class="form-control form-control-lg bg-white" id="floatingPlaintextInput"  placeholder="For Scholarship" value="For Scholarship">
                          </div>

                         <div class="form-floating mb-3 mt-5">
                            <label for="floatingTextarea2"><p>Comment:</p></label>
                            <textarea class="form-control"  id="floatingTextarea2" style="height: 150px"></textarea>
                          </div>
                          </form>
                     </form>

                     <div class="mb-2 pt-4  text-right">
                        <a class="btn bnt-lg btn--cta text-white text-decoration-none mx-3" href='{{ route('admin.admin-form')}}' role="button">Set Appointment</a>
                        <button type="submit" class="btn bnt-lg btn--cta text-white text-decoration-none" id="submitButton">Submit</button>
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
    document.getElementById("submitButton").addEventListener("click", function() {
        swal("Success!", "Your message has been Successfully Sent!").then(() => {
            window.location.href = "{{ route('admin.admin-mainpage') }}";
        });
    });
</script>
