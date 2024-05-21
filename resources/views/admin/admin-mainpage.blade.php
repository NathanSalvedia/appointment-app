@extends('layouts.default')

@section('title', 'Appointment App | Dashboard ')

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
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="">Dashboard</a></li>
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('admin-logout')}}">Logout</a></li>
                  </ul>
                 </div>
            </div>
          </div>

          <div class="container">
             <div class="mt-5 text-center mb-5">
                <h1 class="display-4">Welcome to Dashboard</h1>
             </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control form-control-lg" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                              <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                  <i class="fa fa-search"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="table-resonsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">First Name</th>
                                  <th scope="col">Middle Name</th>
                                  <th scope="col">Last Name</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($appointments as $appointment)
                                <tr>
                                <td> {{ $appointment->id }} </td>
                                <td> {{ $appointment->firstname }} </td>
                                <td> {{ $appointment->middlename }} </td>
                                <td> {{ $appointment->lastname }} </td>
                                <td> {{ $appointment->status}}</td>
                                <td>
                                <a  class="btn btn-sm btn-circle btn-outline-info" title="Show" href="{{ route('admin-view', ['id' => $appointment->id]) }}"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-sm btn-circle btn-outline-danger" href="{{ url('admin-mainpage/delete/' . $appointment->id) }}"><i class="fa fa-times"></i></a>
                                </td>
                                </tr>
                           @endforeach
                            </tbody>
                     </table>
                    </div>
                </div>
             </div>
        </div>
    </div>



