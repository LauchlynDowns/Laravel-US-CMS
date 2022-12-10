<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class admincontroller extends Controller
{
    public function checkifadmin()
  {
    $adminstatus = Auth::user()->admin;
   
    // return($adminstatus);
    // return $adminstatus;

    if($adminstatus == "true"){
        return view('adminpanel',  ['activeusers' => User::all()]);



    } else if($adminstatus == "FALSE"){
        return redirect('/dashboard');
    } else {
        return redirect('/dashboard');
    }
   
   
  }


  public function deleteuser()
  {
    // return request();
    User::where('id', request('userid'))->delete();
    return redirect('/adminpanel');
  }
}
