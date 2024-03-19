@extends('layouts.public')

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
      <div class="mt-4 pt-5  text-center ">
        <h1 class="display-3">Appointment</h1>
       </div>
       <div class="row">
         <table class="table mb-0 mt-5 ">
          <thead>
              <tr class="cta-table ">
                  <th scope="col"><h2 class="display-6 ">Appointment</h2></th>
                  <th scope="col" class="text-right"><h2 class="display-5">Status</h2></th>
              </tr>
          </thead>
          <tbody>
            <tr>
             <td class="pl-5"><h3>COR</h3></td>
             <td class="text-right pr-4"><h3>Pending</h3></td>
              <td width="150" class="pl-5">
                <a href='{{ route('user.view')}}' class="btn btn-sm" title="Show"><i class="fa fa-eye"></i></a>
                <a href='{{ route('user.create')}}' class="btn btn-sm" title="Edit"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
          </tbody>
         </table>
      </div>
