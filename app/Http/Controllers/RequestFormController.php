<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForm;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class RequestFormController extends Controller
{
    public function displayUser()
    {
        $users = User::all();
        return view('admin.admin-mainpage', compact('users'));
    }

    public function create()
    {
        return view('user.requestforms');
    }

    public function index()
    {
        $appointments = RequestForm::all();
        return view('user.status', compact('appointments'));
    }

    public function store(Request $request)
    {


        $requestForm = new RequestForm();
        $requestForm->firstname = $request->firstname;
        $requestForm->middlename = $request->middlename;
        $requestForm->lastname = $request->lastname;
        $requestForm->phonenumber = $request->phonenumber;
        $requestForm->typesofrequirements = $request->typesofrequirements;
        $requestForm->purpose = $request->purpose;

        // Handle file upload


        // Save the data
        $requestForm->save();

        // Redirect
        return redirect()->route('status');
    }

    public function show()
    {
        $appointments = RequestForm::all();
        return view('user.view', compact('appointments'));
    }

    public function edit($id)
    {
        $requestForm = RequestForm::findOrFail($id);
        return view('user.edit', compact('requestForm'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:15',
            'typesofrequirements' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'purpose' => 'nullable|string',
        ]);

        $requestForm = RequestForm::findOrFail($id);

        $requestForm->firstname = $request->firstname;
        $requestForm->middlename = $request->middlename;
        $requestForm->lastname = $request->lastname;
        $requestForm->phonenumber = $request->phonenumber;
        $requestForm->typesofrequirements = $request->typesofrequirements;
        $requestForm->purpose = $request->purpose;
        $requestForm->image = $request->image;

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageX = $request->file('image');
            $imageName = time() . '.' . $imageX->getClientOriginalExtension();
            $imageX->move(public_path('/img'), $imageName);
            $requestForm->image = $imageName;
        }

        $requestForm->save();

        return redirect()->route('status', $request->id)->with('success', 'Information updated successfully');
    }
}
