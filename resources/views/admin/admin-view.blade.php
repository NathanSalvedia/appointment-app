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
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('admin-mainpage.displayUser')}}">Dashboard</a></li>
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('admin-logout')}}">Logout</a></li>
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

                     <form class="cta-form" method="GET">
                            @csrf

                               @foreach ($appointments as $appointment)
                               @if ($appointment->id == request()->id)


                               <div class="row my-5">
                                <div class="col-md-3 mb-3">
                                    <label for="firstName" class="form-label">First Name:</label>
                                    <input type="text" class="form-control form-control-lg bg-white" id="firstName" value="{{ $appointment->firstname }}" disabled>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="middlename" class="form-label">Middle Name:</label>
                                    <input type="text" class="form-control form-control-lg bg-white" id="middleName" value="{{ $appointment->middlename }}" disabled>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="lastname" class="form-label text-dark">Last Name:</label>
                                    <input type="text" class="form-control form-control-lg bg-white" id="lastName" value="{{ $appointment->lastname }}" disabled>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="phone" class="form-label text-dark">Phone Number:</label>
                                    <input type="text"  class="form-control form-control-lg bg-white form-control-lg"  id="phone"  value="{{ $appointment->phonenumber }}" disabled>
                                </div>
                               </div>
                                    <div class="cta--form">
                                        <p class="">Request Appointment:</p>
                                       <option>{{ $appointment->typesofrequirements }}</option>
                                    </div>

                                    <div class="form-group mt-3 pt-4">
                                       <div class="">
                                          <img  src="{{ asset('img/' .$appointment->image)}}" height="250" width="250" alt=""/>
                                       </div>
                                     </div>

                                    <div class="form-floating mt-5">
                                       <label for="floatingPlaintextInput">Purpose:</label>
                                       {{ $appointment->purpose }}
                                     </div>
                               @endif
                              @endforeach
                             <div class="form-floating mb-3 mt-3">
                            <label for="floatingTextarea2"><p>Comment:</p></label>
                            <textarea class="form-control"  id="floatingTextarea2" style="height: 150px"></textarea>
                             </div>


                          <div class="mb-2 pt-2  text-right">
                            <a class="btn bnt-lg btn--cta text-white text-decoration-none mx-3" href="{{ route('admin-form', ['id' => $appointment->id])}}" role="button">Set Appointment</a>
                          </div>

                     </form>
                 </div>
              </div>
            </div>

            </div>
          </div>
    </div>
</div>


