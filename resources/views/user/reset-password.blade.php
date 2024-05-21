@extends('layouts.general')


<div class="col-md-4 m-auto p-5 ">
    <div class="bg-white shadow-sm">
        <h1 class="border-bottom p-4 text-center">Reset Password</h1>
        <div class="px-4 py-4 p-5">
            <form class="form-signup">
                @csrf
            <div class="mb-3 pt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control form-control-lg" name="email" />
            </div>

            <div class="mb-3 pt-3">
                <label for="password" class="form-label text-dark">Password:</label>
                <input type="password" class="form-control  form-control-lg" name="password" />
            </div>

            <div class="mb-3 pt-3">
                <label for="password" class="form-label text-dark">Password Confirmation:</label>
                <input type="password" class="form-control  form-control-lg" name="password_confirmation" />
            </div>

            <div class="mb-3 pt-3">
                <button type="submit" class="btn btn-block btn-dark">Reset Password</button>
            </div>
        </form>
    </div>
