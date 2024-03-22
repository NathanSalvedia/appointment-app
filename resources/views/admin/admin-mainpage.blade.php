@extends('layouts.default')

@section('title', 'Appointment App | Dashboard ')

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
                  <li class="pt-5 mb-2 pl-5 p-5  text-center"><a class="text-white" href='{{ route('admin.admin-logout')}}'>Logout</a></li>
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
                                    <a href='{{ route('admin.admin-request')}}' class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" id="deleteButton"><i class="fa fa-times"></i></a>
                                  </td>
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
    document.getElementById("deleteButton").addEventListener("click", function() {
        swal({
            title: "Are you sure?",
            text: "You want, to delete this user!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Success the user has been deleted!", {
                    icon: "success",
                });
            } else {
                swal("This will remain the same!");
            }
        });
    });
</script>
