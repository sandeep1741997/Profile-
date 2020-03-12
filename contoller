<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;

class Imagecontroller extends Controller
{
	 public function profile()
    {
        return view('profile');
    }
    public function index()
    {
        return view('Imageupload');
    }
 
   public function save(Request $request)
    {
       request()->validate([
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('fileUpload')) {
           $destinationPath = 'public/image/'; // upload path
           $profileImage ="ancc".$files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
        }
        return Redirect::to("image")
        ->withSuccess('Great! Image has been successfully uploaded.');
 
    }
}
