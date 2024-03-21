@extends('layouts.public')

@section('title', 'Appointment App | Edit Request ')


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
             <a class="btn btn-lg" href='{{ route('user.status')}}' role="button">Back</a>
             <button type="button" class="btn  btn-lg" data-toggle="modal" data-target="#exampleModal">Save</button>
             <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h2 class="modal-title text-danger" id="exampleModalLabel">Unsaved Changes</h2>
                     </div>
                     <div class="modal-body p-5">
                         <h3 class="display-5 text-center text-success">Do you want to save the changes you made this time?</h3>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-lg" data-dismiss="modal">Save
                       </button>
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



