<?php

namespace App\Http\Controllers;
use App\Models\content;
// use Illuminate\Http\Request;
// use App\Models\User;
class NewContentController extends Controller
{
    public function create(){
        return view('newcontent.addcontent');
    }
    public function addnewcontent(){

  $attributes = request()->validate([
    'userid' =>'required|max:255',
        'contenttitle' =>'required|max:255',
        'contentdescription' => 'required|max:255',
        'contentbody' => 'required'
       ]);
        //  dd('success validation succeeded');
     content::create($attributes);
   return redirect('/');
    }
};

