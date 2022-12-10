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
    $adminstatus = Auth::user()->admin;

    if($adminstatus == "true"){
    // return request();
    User::where('id', request('userid'))->delete();
    return redirect('/adminpanel');
    }else if($adminstatus == "FALSE"){
      return redirect('/dashboard');
  } else {
      return redirect('/dashboard');
  }
  }
}
