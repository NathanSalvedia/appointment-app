@extends('layouts.default')

@section('title', 'Appointment App | Settings | Status')

<div class="container-fluid">
    <div class="row">
        <div class=".col">
            <div class="card">
                <div class="mb-5 pt-5  text-center"><a href="#">
                  <img class="icon" alt="" src="{{ asset('img/icon.png') }}" />
                 </a></div>
                <div class="mb-5 text-center">
                  <h4 class="heading"> Kent Zorel Elnas</h4>
                </div>
               <div class="nav">
                <ul class="list-unstyled pl-5">
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href="{{ asset('mainpage')}}">Home</a></li>
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.status')}}'>Appointment</a></li>
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.settings')}}'>Settings</a></li>
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.logout')}}'>Logout</a></li>
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
                                <th scope="col"><h1 class="display-5 ">Appointment</h1></th>
                                <th scope="col" class="text-right"><h1 class="display-5">Status</h1></th>
                                <th scope="col" class="text-right"><h1 class="display-5">Action</h1></th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                           <td>
                            <p class="h2">COR</p>
                           </td>
                           <td class="text-right ml-5">
                            <p class="h2">Pending</p>
                           </td>
                            <td width="150" class="text-right">
                                <a href='{{ route('user.view')}}' class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                          </tr>
                        </tbody>
                       </table>
                </div>
            </div>
          </div>
    </div>
</div>








