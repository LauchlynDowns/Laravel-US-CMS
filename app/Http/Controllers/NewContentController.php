<?php

namespace App\Http\Controllers;
use App\Models\content;
use Auth;
// use App\Models\Auth;
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
       
     content::create($attributes);
   return redirect('/mycontent');
    }

    public function delete(){
      //store current logged in user
      $currentuser = Auth::user()->id;
     $tobedeleted = request('id');
     //used to store the user id of the post the user wants to delete
     $postauthorid = content::where('userid', $currentuser)->find($tobedeleted)->userid;//this will throw an error if the user isnt the owner
    //only delete the userid if the current signed in user owns the content

if($currentuser = $postauthorid){
    content::where('id', $tobedeleted)->delete();
       return redirect('mycontent');
}  else{
  return redirect('/mycontent');
}  
      } 
};

