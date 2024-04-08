@extends('layouts.public')

@section('title', 'Appointment App |  View Request ')




    <div class="container">
       <div class="bg-white shadow-sm rounded  mt-5 m-5 p-3">
         <div class="row">
            <div class="col-md-11 m-auto">
                <div class="mt-4 mb-4">
                    <p class="cta-text font-weight-bold">Request Form</p>
                  </div>

                  <form action="" class="cta-form">
                    @csrf
                    <div class="row my-5">
                        <div class="col-lg-3 mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="firstName" value="Kent zorel" readonly>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label for="firstName" class="form-label">Middle Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="middletName" value="B" readonly>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="lastName" value="Elnas" readonly>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label for="phone" class="form-label text-dark">Phone Number:</label>
                            <input type="tel" readonly class="form-control form-control-lg bg-white form-control-lg"  value="09979800852">
                        </div>
                        </div>

                        <div class="cta--form">
                            <select id="select-option" name="select-option" required>
                                <option value="COR">COR</option>
                              </select>
                        </div>

                        <div class="form-group mt-3 pt-4">
                            <img src="{{ asset('img/receipt.jpg')}}" width="300px" height="200" />
                         </div>

                       <div class="form-floating mt-4">
                        <label for="floatingPlaintextInput">Purpose:</label>
                        <input type="text" readonly class="form-control form-control-lg bg-white" id="floatingPlaintextInput"  placeholder="For Scholarship" value="For Scholarship">
                      </div>
                  </form>
            </div>
         </div>

         <div class="mb-5 pt-5  text-right mx-3">
            <a class="btn btn--cta  btn-lg text-white text-decoration-none" href='{{ route('user.status')}}' role="button">Back</a>
            <a class="btn btn--cta  btn-lg text-white text-decoration-none mx-3" href='{{ route('user.create')}}' role="button">Edit</a>
             <!--<button type="submit" class="btn  btn-lg">Submit</button>-->
           </div>
       </div>
    </div>


