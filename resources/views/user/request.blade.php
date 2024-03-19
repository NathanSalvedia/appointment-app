    @extends('layouts.public')

    @section('title', 'Appointment App | Request ')



    <div class="container-fluid">
       <div class="row">
        <div class=".col">
            <div class="card">
            <div class="mb-5 pt-5  text-center"><a href="#">
            <img class="icon" alt="" src="{{ asset('img/icon.png')}}" />
            </a>
            </div>
                <div class="mb-5 text-center">
                <h4 class="heading"> Kent Zorel Elnas</h4>
                </div>
            <div class="nav">
                <ul class="list-unstyled pl-5">
                <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href="{{ asset('mainpage') }}">Home</a></li>
                <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.status')}}'>Appointment</a></li>
                <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.settings')}}'>Settings</a></li>
                <li class="pt-5 mb-2 pl-5 p-5 text-center"><a class="text-white" href='{{ route('user.logout')}}'>Logout</a></li>
                </ul>
            </div>
            </div>
        </div>

        <div class="container mt-5 pl-5 pt-5">
        <div class="bg-white shadow-sm rounded mt-5 m-5 p-3">
            <div class="row">
                <div class="col-md-9 m-auto">
                <div class=" mt-4 my-5 ">
                <h4 class="">Request Form</h4>
                </div>

                <div class="mt-3">
                    <form class="cta-form">
                    <div>
                        <select id="select-option" name="select-option "required>
                        <option value="">Please choose one option:</option>
                        <option value="Transcript of Record">Transcript of Record</option>
                        <option value="COR">COR</option>
                        <option value="Certitification of Unit Earn">Certitification of Unit Earn</option>
                        <option value="Speacial Order">Special Order  </option>
                        <option value="Certificate of Graduate">Certificate of Graduate</option>
                        <option value="Diploma">Diploma</option>
                        </select>
                    </div>
                    </form>

                    <div class="form-group mt-3 pt-4">
                    <label for="fileInput">Choose a file:</label>
                    <input type="file" class="form-control-file" id="fileInput" name="fileInput">
                    </div>
                    <button type="submit" class="btn btn-sm">Upload</button>

                    <div class="form-floating mt-4 my-5">
                    <label for="floatingTextarea2">Purpose:</label>
                    <textarea class="form-control"  id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="mb-5 pt-5  text-right">
                    <!--<a class="btn btn-lg" href="appointment-done.html" role="button">Submit</a>-->
                    <button type="button" class="btn  btn-lg" data-toggle="modal" data-target="#exampleModal">Submit</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <h1 class="display-5 text-center">You've sucessfully Sent!!</h1>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-lg" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                </div>
                </div>
            </div>
        </div>
    </div>
         </div>
        </div>




