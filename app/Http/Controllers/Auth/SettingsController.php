<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

   public function index(){

      return view('user.settings');

   }


   public function edit(){

    return view('user.edit-profile');
   }



   public function update(){


   }

}
