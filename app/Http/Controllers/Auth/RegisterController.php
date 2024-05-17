<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation

        $request->validate([
            'firstname' => 'required|string|max:50',
            'middlename' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'phonenumber' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8|max:12',

        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'phonenumber' => $request->phonenumber,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,



        ]);

        Auth::login($user);

        return redirect('/mainpage');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
