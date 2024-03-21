@extends('layouts.default')

@section('title', 'Appointment App | Settings | Status')

<div class="container-fluid">
    <div class="row">
        <div class=".col">
            <div class="card">
                <div class="mb-5 pt-5  text-center"><a href="#">
                  <img class="icon" alt="" src="{{ asset('img/logo7.png') }}" />
                 </a></div>
                <div class="mb-5 text-center">
                  <h4 class="heading"> Hi Admin</h4>
                </div>
               <div class="nav">
                <ul class="list-unstyled pl-5">
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('admin.admin-mainpage')}}'>Home</a></li>
                  <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('admin.admin-logout')}}'>Logout</a></li>
                </ul>
               </div>
            </div>
          </div>

          <div class="container">
            <div class="">
                <h1 class="display-4 text-center mt-5 mb-5">Welcome to Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                              <th scope="col"><h3>ID</h3></th>
                              <th scope="col"><h3>Username</h3></th>
                              <th scope="col"><h3>Email</h3></th>
                              <th scope="col"><h3>Status</h3></th>
                              <th scope="col"><h3>Actions</h3></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <th scope="row"><h3>1</h3></th>
                                <td><h3>Fluffy</h3></td>
                                <td><h3>kentozorel@gmail.com</h3></td>
                                <td><h3>Pending</h3></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                    <a href='{{ route('admin.admin-form')}}' class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                                  </td>
                            </tr>
                          </tbody>
                    </table>
                </div>
            </div>
          </div>
    </div>
</div>








