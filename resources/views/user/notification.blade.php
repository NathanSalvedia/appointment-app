@extends('layouts.main')

@section('title', 'Appointment App | Inbox')
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
                    <h1>Inbox</h1>
                </div>
                <div class="container mt-5">
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">From</th>
                          <th scope="col">Subject</th>
                          <th scope="col">Status</th>
                          <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($requestForms as $request)
                        <tr data-toggle="modal" data-target="#emailModal{{ $request->id }}">
                            <td>Admin123@gmail.com</td>
                            <td>{{ $request->typesofrequirements }}</td>
                            <td>{{ $request->status }}</td>
                            <td>{{ $request->created_at }}</td>
                        </tr>
                        @endforeach
                        <!-- Add more rows as needed -->
                      </tbody>
                    </table>
                  </div>

                 <!-- Modals -->
                 @foreach($requestForms as $request)
                 <div class="modal fade" id="emailModal{{ $request->id }}" tabindex="-1" aria-labelledby="emailModal{{ $request->id }}Label" aria-hidden="true">
                     <div class="modal-dialog modal-xl modal-dialog-centered">
                         <div class="modal-content">
                             <div class="modal-header" style = "align-items: center; align-content: center; ">
                                 <h5  class="modal-title" id="emailModal{{ $request->id }}Label">{{ $request->typesofrequirements }}</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 @if($request->status == 'Approved')
                                     <p class="notif-text text-center mb-3"> Approved</p>
                                     <p class="notif-text mb-3 pt-3">Your request has been approved, Kindly proceed to Registrar Office at Speccific Time </p>
                                 @elseif($request->status == 'pending')
                                     <p>Pending</p>
                                 @else
                                     <p class="notif-text text-center mb-3 ">Status: {{ $request->status }}</p>
                                     <p class="notif-text text-center mb-3 pt-3">Comment:{{ $request->admin_comment }}</p>
                                 @endif
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn--cta  btn-lg" data-dismiss="modal">Close</button>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
            </div>
        </div>
    </div>
  </div>
</div>




