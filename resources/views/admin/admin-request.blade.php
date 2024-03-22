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

          <div class="container">
            <div class="shadow-lg rounded mt-5 m-5 p-5">
             <div class="row">
                <div class="col-md-9">
                    <div>
                        <h1 class="display-4 text-center mx-5">Inbox</h1>
                    </div>
                     <div class="">
                        <div class="p-3 mt-3  mx-5 text-dark"><p class="h2">Kentzorelelnas.202200472@gmail.com</p></div>
                     </div>
                     <div class="">
                        <div class="p-3 mt-3 mx-5 text-dark">
                            <p class="h2">Subject: Request for COR</p>
                        </div>
                    </div>
                    <div class="mx-5 mt-4">
                        <img src="{{ asset('img/icon11.png')}}" alt="">
                        <button type="button" class="btn btn-sm">form.docs</button>
                    </div>
                    <div class="form-floating mt-4 mx-5">
                        <label for="floatingTextarea2"><h3>Comment:</h3></label>
                        <textarea class="form-control"  id="floatingTextarea2" style="height: 190px"></textarea>
                    </div>
                </div>
             </div>
              <div class="mb-5 pt-5  text-right">
                <a class="btn btn-lg" href='{{ route('admin.admin-form')}}' role="button">Set Appointment</a>
                <button type="button" class="btn btn-lg" id="submitButton">Submit</button>
              </div>
            </div>
          </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    document.getElementById("submitButton").addEventListener("click", function() {
        swal("Success!", "Your message has been Successfully Sent!").then(() => {
            window.location.href = "{{ route('admin.admin-mainpage') }}";
        });
    });
</script>
