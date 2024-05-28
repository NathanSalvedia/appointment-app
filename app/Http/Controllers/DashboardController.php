<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RequestForm;
use App\Models\Appointment;

class DashboardController extends Controller
{
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


    public function return(Request $request)
    {
        $appointments = RequestForm::where('id', $request->input('appointment_id'))->first();

        $appointments->status = "Returned";
        $appointments->admin_comment = $request->admin_comment;
        $appointments->save();







        return redirect()->route('admin-mainpage.displayUser')->with('status', 'Appointment has been returned to the user.');
    }

}
