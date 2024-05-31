@extends('layouts.public')

@section('title', 'Appointment App | Request ')



<div class="container-fluid">
    <div class="row">
        <div class=".col">
            <div class="card-sidebar d-flex flex-column" style="height: 100vh;">
              <div class="pt-3 mb-3">
                <div class="mb-5 pt-5 pl-3">
                  <img src="{{ asset('img/logo7.png')}}" alt="Profile Picture">
                </div>
              </div>
              <div class="mb-5 pl-3 text-white">
                <p class="cta-text">Hi, {{ Auth::user()->firstname }}!</p>
              </div>
              <div class="nav flex-grow-1">
                <ul class="list-unstyled">
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('user.notification')}}">Inbox</a></li>
                  <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
                  <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="status">Appointment</a></li>
                  <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('user.settings')}}">Settings</a></li>
                </ul>
              </div>
              <div class="mt-auto mb-5 pl-3">
                <ul class="list-unstyled">
                  <li class="pl-3"><a class="text-white text-decoration-none" href="{{ route('logout')}}" style="font-size: 1.8rem;">Logout</a></li>
                </ul>
              </div>x
            </div>
          </div>
       <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-4 pt-5 text-center ">
                    <p class="h2">Inbox</p>
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




