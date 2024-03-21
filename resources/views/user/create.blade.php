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
             <button type="button" class="btn  btn-lg" id="saveButton">Save</button>
            </div>
        </div>
    </div>
    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    document.getElementById('saveButton').addEventListener('click', function(event) {
        event.preventDefault();
        swal("Success!", "Your request has been saved!", "success")
        .then((value) => {
            window.location.href = "{{ route('user.status') }}"; // Redirect to status page
        });
    });
</script>
