@extends('layouts.default')

@section('title', 'Appointment App | Settings | Status')

<div class="container-fluid">
    <div class="row">
        <div class=".col">
            <div class="card-sidebar">
                <div class="mb-5 pt-5 pl-3"><a href="#">
                    <img  src="{{ asset('img/icon.png')}}" alt="icon"/>
                   </a></div>
                  <div class="mb-5 pl-3 text-white">
                     <p class="cta-text">Kent Zorel Elnas</p>
                  </div>
                 <div class="nav">
                  <ul class="list-unstyled">
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href='{{ route('user.status')}}'>Appointment</a></li>
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href='{{ route('user.settings')}}'>Settings</a></li>
                    <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="" id="loginLink">Logout</a></li>
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
                       <table class="table table-striped table-hover mt-5 ">
                        <thead>
                            <tr>
                                <th scope="col">Appointment</></th>
                                <th scope="col" class="text-right">Status</></th>
                                <th scope="col" class="text-right">Action</></th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                           <td>
                            COR
                           </td>
                           <td class="text-right ml-5">
                           Pending
                           </td>
                            <td class="text-right">
                                <a href='{{ route('user.view')}}' class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                          </tr>
                        </tbody>
                       </table>
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










