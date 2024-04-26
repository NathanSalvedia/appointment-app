<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\RequestForm;
class RequestFormController extends Controller
{
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
    'purpose' => 'required',
    ]);

$requestform = new RequestForm();
$requestform->firstname = $request->firstname;
$requestform->middlename = $request->middlename;
$requestform->lastname = $request->lastname;
$requestform->phonenumber = $request->phonenumber;
$requestform->typesofrequirements = $request->typesofrequirements;
$requestform->purpose = $request->purpose;


$requestform->save();

return redirect()->route('status')->with('success', 'Request Form Submitted Successfully');

 }

  public function show(){
    $appointments = RequestForm::all();
    return view('user.view', compact('appointments'));
  }


}
