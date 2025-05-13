@extends('layouts.main')

@section('title', 'Appointment App | Status')
@section('css', 'css/general.css')


<div class="container-fluid">
 <div class="row">
    <div class=".col">
        <div class="card-sidebar d-flex flex-column" style="height: 100vh;">
          <div class="pt-3 mb-3">
          <div class="logo3">
                  <img src="{{ Auth::user()->profile_picture 
    ? asset('images/profile/' . Auth::user()->profile_picture) . '?t=' . time() 
    : asset('images/profile/default.png') }}" alt="Profile Picture">
                </div>
              </div>
              <div class="mb-5 pl-3 text-white">
                <h1 class="username-text">Hi, {{ Auth::user()->firstname }}!</h1>
              </div>
          <div class="container">
        @include('layouts.navbar.sidenavbar')
        @yield('content1')
    </div>
                <div class="navbar-collapse" id="navbar-toggler">
                <ul class="navbar-nav ml-auto main-nav-list">
                <li style="  list-style: none; display: flex; margin-top: 55px; margin-left: 20px; transition: all 0.3s;">
                <a class="nav-item main-nav-link " href="{{ route('logout') }}">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-4 pt-5 text-center ">
                        <h1 class="display-3">Appointment</h1>
                    </div>
                    <table class="table table-striped table-hover mt-5">
                        <thead  class="thead-dark">
                            <tr>
                                <th scope="col">Appointment</th>
                                <th scope="col" class="text-right">Status</th>
                                <th scope="col" class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment )
                            <tr>
                                <td>
                                    {{ $appointment->typesofrequirements }}
                                </td>
                                <td class="text-right ml-5">
                                    {{ $appointment->status }}
                                </td>
                                <td width="150" class="text-right">
                                    <a href="{{ route('view', ['id' => $appointment->id]) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
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
