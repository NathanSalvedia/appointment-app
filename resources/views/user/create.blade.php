@extends('layouts.public')

@section('title', 'Appointment App | Edit Request ')

      <div class="container">
        <div class="bg-white shadow-sm rounded mt-5 m-5 p-3">
            <div class="row">
                <div class="col-md-11 m-auto">
                    <div class="mt-4 mb-4">
                        <p class="cta-text font-weight-bold">Request Form</p>
                      </div>
                      <form action="" class="cta-form">
                        <div class="row my-5">
                            <div class="col-lg-3 mb-3">
                                <label for="firstname" class="form-label text-dark">First Name:</label>
                                <input type="text" class="form-control  form-control-lg" name="firstname" required/>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <label for="middlename" class="form-label text-dark">Middle Name:</label>
                                <input type="text" class="form-control  form-control-lg" name="middlename" required/>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <label for="lastname" class="form-label text-dark">Last Name:</label>
                                <input type="text" class="form-control  form-control-lg" name="lastname" required/>
                            </div>

                            <div class="col-lg-3 mb-3">
                                <label for="phone" class="form-label text-dark">Phone Number:</label>
                                <input type="text" class="form-control  form-control-lg" name="phone"  placeholder="+63"/>
                            </div>
                            </div>

                     <div class="cta--form">
                       <select id="select-option" name="select-option" required>
                        <option value="">Please choose one option:</option>
                        <option value="Transcript of Record">Transcript of Record</option>
                        <option value="COR">COR</option>
                        <option value="Certitification of Unit Earn">Certitification of Unit Earn</option>
                        <option value="Speacial Order">Special Order  </option>
                        <option value="Certificate of Graduate">Certificate of Graduate</option>
                        <option value="Diploma">Diploma</option>
                      </select>
                     </div>

                     <div class="form-group mt-3 pt-4">
                        <label for="fileInput">Choose a file:</label>
                        <input type="file" class="form-control-file" id="fileInput" name="fileInput">
                    </div>
                    <button type="submit" class="btn--cta btn-lg">Upload</button>

                    <div class="form-floating mt-4">
                        <label for="floatingTextarea2">Purpose:</label>
                        <textarea class="form-control"  id="floatingTextarea2" style="height: 180px"></textarea>
                      </div>
                  </form>
                </div>
            </div>
            <div class="mb-5 pt-5  text-right mx-3">
                <a class="btn btn--cta btn-lg text-white text-decoration-none" href='{{ route('user.status')}}' role="button">Back</a>
                <button type="button" class="btn btn--cta btn-lg mx-3 text-white text-decoration-none" id="saveButton">Save</button>
               </div>

        </div>
      </div>




