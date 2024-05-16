<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestForm;
use App\Models\User; // Change Users to User for model name consistency
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RequestFormController extends Controller
{
    public function displayUser()
    {
        // Retrieve all items from the database
        $users = User::all();

        // Pass the items data to the view
        return view('admin.admin-mainpage', compact('users')); // Removed slash from view name
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
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'phonenumber' => 'required',
            'typesofrequirements' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Adjusted validation for image
            'purpose' => 'required',
        ]);

        $requestForm = new RequestForm();
        $requestForm->firstname = $request->firstname;
        $requestForm->middlename = $request->middlename;
        $requestForm->lastname = $request->lastname;
        $requestForm->phonenumber = $request->phonenumber;
        $requestForm->typesofrequirements = $request->typesofrequirements;

        // Handle file upload
        $imagePath = $request->file('image')->store('public/images');
        $requestForm->image = $imagePath;

        $requestForm->purpose = $request->purpose;
        $requestForm->save();

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

    public function update(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:15',
            'typesofrequirements' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Adjusted validation for image
            'purpose' => 'nullable|string',
        ]);

        $requestForm = RequestForm::findOrFail($request->id); // Retrieve request form by ID

        $requestForm->update([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'phonenumber' => $request->phonenumber,
            'typesofrequirements' => $request->typesofrequirements,
            'purpose' => $request->purpose,
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            Storage::delete($requestForm->image);

            // Store new image
            $imagePath = $request->file('image')->store('public/images');
            $requestForm->image = $imagePath;
        }

        $requestForm->save();

        return redirect()->route('edit', $request->id)->with('success', 'Information updated successfully');
    }
}
