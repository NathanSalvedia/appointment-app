@extends('layouts.public')

@section('title', 'Appointment App | View Request')

<div class="container">
    <div class="bg-white shadow-sm rounded mt-5 m-5 p-3">
        <div class="row">
            <div class="col-md-11 m-auto">
                <div class="mt-4 mb-4">
                    <p class="cta-text font-weight-bold">Request Form</p>
                </div>

                <form class="cta-form" method="GET">
                    @csrf
                    <div class="row my-5">
                        <div class="col-md-3 mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="firstName" value="{{ Auth::user()->firstname }}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="middlename" class="form-label">Middle Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="middleName" value="{{ Auth::user()->middlename}}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="lastname" class="form-label text-dark">Last Name:</label>
                            <input type="text" class="form-control form-control-lg bg-white" id="lastName" value="{{ Auth::user()->lastname}}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="phone" class="form-label text-dark">Phone Number:</label>
                            <input type="text"  class="form-control form-control-lg bg-white form-control-lg"  value="{{ Auth::user()->phonenumber}}" id="phone" readonly />
                        </div>
                    </div>

                    @foreach ($appointments as $appointment)
                        @if ($appointment->id == request()->id)
                             <div class="cta--form">

                                <option>{{ $appointment->typesofrequirements }}</option><br>
                             </div>

                             <div class="form-group mt-3 pt-4">
                                <div class="">
                                   <img  src="{{ asset('img/' .$appointment->image)}}" height="180" width="180" alt=""/>
                                </div>
                              </div>

                             <div class="form-floating mt-5">
                                <label for="floatingPlaintextInput">Purpose:</label>
                                {{ $appointment->purpose }}
                              </div>
                        @endif
                    @endforeach

                    <div class="mb-5 pt-5 text-right mx-3">
                        <a class="btn btn--cta btn-lg text-white text-decoration-none" href="{{ route('status')}}" role="button">Back</a>
                        <a class="btn btn--cta btn-lg text-white text-decoration-none mx-3" href="{{ route('user.edit', ['id' => $appointment->id]) }}" role="button">Edit</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
