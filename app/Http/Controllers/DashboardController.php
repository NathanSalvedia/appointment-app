<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\RequestForm;
use App\Models\Appointment;


class DashboardController extends Controller
{
    //new changes
    public function showRequests()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Fetch request forms associated with the authenticated user's last name
        $requestForms = RequestForm::where('lastname', $user->lastname)->get();

        // Pass the data to the view
        return view('user.notification', ['requestForms' => $requestForms]);
    }



    public function index(){
        return view('admin.admin-mainpage');
    }


    public function displayUser()
    {
        $appointments = RequestForm::all();
        return view('admin.admin-mainpage', compact('appointments'));
    }



    public function show($id){

      $appointments = RequestForm::all();
      return view('admin.admin-view', ['id' => $id], compact('appointments'));
    }


    public function create(){

        return view('admin.admin-form');
    }



    public function store(Request $request){

        $request->validate([

            'date' => 'required|date',
            'timeInput' => 'required',
            'phonenumber' => 'required|string',

        ]);
        $requestforms = RequestForm::where('id', $request->input('appointment_id'))->first();

        $requestforms->status = "Approved";
        $requestforms->save();

        $appointment = Appointment::create([
            'date' => $request ['date'],
            'time' => $request ['timeInput'],
            'phonenumber' => $request ['phonenumber'],
        ]);


        $appointment->save();

        return redirect()->route('admin-mainpage.displayUser');
    }


    public function remove($id)
    {
        $appointments = RequestForm::find($id);
        $appointments->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }


    public function returnn(Request $request)
{
    // Retrieve the appointment ID from the route parameters
    $appointmentId = $request->route('id');

    // Retrieve the RequestForm with the given ID
    $requestForm = RequestForm::where('id', $appointmentId)->first();

    if ($requestForm) {
        // Update the status and admin comment
        $requestForm->status = "Returned";
        $requestForm->admin_comment = $request->admin_comment;
        $requestForm->save();

        // Redirect to the admin-view route with the appointment ID
        return redirect('admin-mainpage');
    } else {
        return redirect()->back()->with('error', 'Appointment not found.');
    }
}
}
