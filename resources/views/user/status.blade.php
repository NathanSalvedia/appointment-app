@extends('layouts.default')

@section('title', 'Appointment App | Status')

<div class="container-fluid">
    <div class="row">
        <div class=".col">
            <div class="card-sidebar">
                <div class="mb-5 pt-5 pl-3">
                    <a href="#">
                        <img src="{{ asset('img/icon.png')}}" alt="icon"/>
                    </a>
                </div>
                <div class="mb-5 pl-3 text-white">
                    <p class="cta-text"> Hi, {{ Auth::user()->firstname }}! </p>
                </div>
                <div class="nav">
                    <ul class="list-unstyled">
                        <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ asset('mainpage')}}">Home</a></li>
                        <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="status">Appointment</a></li>
                        <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="user.settings">Settings</a></li>
                        <li class="mb-5 pl-3"><a class="text-white text-decoration-none" href="{{ route('logout')}}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-4 pt-5 text-center ">
                        <h1 class="display-3">Appointment</h1>
                    </div>
                    <table class="table table-striped table-hover mt-5">
                        <thead>
                            <tr>
                                <th scope="col">Appointment</th>
                                <th scope="col" class="text-right">Status</th>
                                <th scope="col" class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment )
                            <tr>
                                <td>
                                    {{ $appointment->typesofrequirements }}
                                </td>
                                <td class="text-right ml-5">
                                    Pending
                                </td>
                                <td width="150" class="text-right">
                                    <a href="{{ route('view', ['id' => $appointment->id]) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
