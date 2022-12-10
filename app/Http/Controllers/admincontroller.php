<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class admincontroller extends Controller
{
    public function checkifadmin()
  {
   //i didnt get round to implementing this! so a view all users will have to do for now
         return view('adminpanel',  ['activeusers' => User::all()]);
   
   
  }
}
