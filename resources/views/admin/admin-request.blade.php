@extends('layouts.public')

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


          <div class="container py-4">
            <div class="bg-img p-3 mb-2  text-white">
                <div class="row">
                    <div class=".col mx-3">
                        <h1 class="display-4">Inbox</h1>
                    </div>

                    <div class=".col">
                        <img src="{{ asset('img/icon10.png')}}" />
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-sm rounded mt-5  p-5 pt-3">
                <div class="row">
                    <div class="col-md-9">
                      <div class="mb-5">
                        <p class="h2 text-lg-left">Email: Kentzorelelnas.202200472@gmail.com</p>
                      </div>

                      <div class="py-5">
                        <p class="h2 text-lg-left">Subject: Request for COR</p>
                      </div>

                      <div class="row">
                        <div class=".col mx-2">
                            <p class="text-lg-left"><img src="{{ asset('img/icon13.png')}}" width="35px
                                " >/</p>
                        </div>
                        <div class=".col">
                        <p class=text-lg-left"><button type="button" class="btn btn-lg">form.docs</button></p>
                        </div>
                      </div>

                      <div class="form-floating mt-4 my-5">
                        <label for="floatingTextarea2"><h3>Comment:</h3></label>
                        <textarea class="form-control"  id="floatingTextarea2" style="height: 190px"></textarea>
                     </div>
                    </div>
                </div>

                <div class="mb-3 pt-3  text-right">
                    <a class="btn btn-lg" href='{{ route('admin.admin-form')}}' role="button">Set Appointment</a>
                    <button type="submit" class="btn  btn-lg" value="submit">Submit</button>
                  </div>
            </div>
          </div>
    </div>
</div>
