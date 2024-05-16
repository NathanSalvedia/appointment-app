@extends('layouts.public')

@section('title', 'Appointment App | Edit Request ')

<div class="container">
    <div class="bg-white shadow-sm rounded mt-5 m-5 p-3">
        <div class="row">
            <div class="col-md-11 m-auto">
                <div class="mt-4 mb-4">
                    <p class="cta-text font-weight-bold">Request Form</p>
                </div>
                <form class="cta-form" method="POST" action="{{ route('edit.update', ['id' => $requestForm->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Add
                    <!-- Add a hidden input field for the ID -->
                    <input type="hidden" name="id" value="{{ $requestForm->id }}">
                    <div class="row my-5">
                        <div class="col-lg-3 mb-3">
                            <label for="firstname" class="form-label text-dark">First Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" name="firstname" id="firstName" value="{{ $requestForm->firstname }}" required/>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label for="middlename" class="form-label text-dark">Middle Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" name="middlename" id="middlename" value="{{ $requestForm->middlename }}" />
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" name="lastname" id="lastname" value="{{ $requestForm->lastname }}" required/>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <label for="phone" class="form-label text-dark">Phone Number:</label>
                            <input type="text" class="form-control form-control-lg bg-white" name="phonenumber"  id="phonenumber" value="{{ $requestForm->phonenumber }}" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="typesofrequirements" class="form-label text-dark">Types of Requirements:</label>
                        <select id="typesofrequirements" name="typesofrequirements" class="form-control" required>
                            <option value="">Please choose one option:</option>
                            <option value="Transcript of Record" {{ $requestForm->typesofrequirements == 'Transcript of Record' ? 'selected' : '' }}>Transcript of Record</option>
                            <option value="COR" {{ $requestForm->typesofrequirements == 'COR' ? 'selected' : '' }}>COR</option>
                            <option value="Certitification of Unit Earn" {{ $requestForm->typesofrequirements == 'Certitification of Unit Earn' ? 'selected' : '' }}>Certitification of Unit Earn</option>
                            <option value="Speacial Order" {{ $requestForm->typesofrequirements == 'Speacial Order' ? 'selected' : '' }}>Special Order</option>
                            <option value="Certificate of Graduate" {{ $requestForm->typesofrequirements == 'Certificate of Graduate' ? 'selected' : '' }}>Certificate of Graduate</option>
                            <option value="Diploma" {{ $requestForm->typesofrequirements == 'Diploma' ? 'selected' : '' }}>Diploma</option>
                        </select>
                    </div>

                    <div class="form-group mt-3 pt-4">
                        <label for="image" class="form-label text-dark">Choose a file / Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept=".jpg, .jpeg, .png" />
                    </div>

                    <div class="form-floating mt-4">
                        <label for="purpose" class="form-label text-dark">Purpose:</label>
                        <textarea class="form-control" id="purpose" name="purpose" style="height: 180px" required>{{ $requestForm->purpose }}</textarea>
                    </div>

                    <div class="mb-5 pt-5 text-right mx-3">
                        <a class="btn btn--cta btn-lg text-white text-decoration-none" href="{{ route('status') }}" role="button">Back</a>
                        <button type="submit" class="btn btn--cta btn-lg mx-3 text-white text-decoration-none">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
