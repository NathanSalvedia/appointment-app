@extends('layouts.general')

@section('title', 'Appointment App | Reset Password')

<div class="auth-wrapper d-flex pt-5 mt-5 p-5 ">
    <div class="col-md-4 m-auto p-5 ">
        <div class="bg-white shadow-sm">
            <h1 class="border-bottom p-4 text-center">Reset Password</h1>
            <div class="px-4 py-4 p-5">
                <form class="form-signup">
                <div class="mb-3 pt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control form-control-lg" name="email" />
                </div>
                <div class="mb-3 pt-3">
                    <button type="submit" class="btn btn-block btn-dark">Send Password reset link</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

