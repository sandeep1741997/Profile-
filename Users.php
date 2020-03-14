<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\RouteCollection;
use App\Form;
use App\studentdetail;
use DB;

class Users extends Controller
{
    public function dologin()
    {
        return view('');
    } 
    public function insert(Request $req)
    {
        $req->validate([
        'email'=>"required",
        'password'=>"min:5 | max:8"
        ]);
        $req->session()->flash('register','Yor are successfully Registered!');
    	$temp = new Form;
    	$temp->name=$req->name;
    	$temp->email=$req->email;
    	$temp->address=$req->address;
    	$temp->password=$req->password;
    	$temp->save();
    	return redirect('/studenthome');

    }

    function match(Request $req)
    {
        $temp = new Form;
        $email=$req->email;
        $pass=$req->password;

         //select * from users where(['email'=>$email,'password'=>$pass])->get();
        $data=DB::table('users')->where(['email'=>$email,'password'=>$pass])->get();

        if(count($data) >0)
        {
            $req->session()->flash('data',"You are successfully login!");
            return redirect('/studenthome');
        }
        else
        {
            echo "You have entered wrong email id or password!";
        }

    }

    

    function stusubmit(Request $req)
    {
        $temp = new studentdetail;
        $temp->name =$req->name;
        $temp->rollno =$req->rollno;
        $temp->email =$req->email;
        $temp->class =$req->class;
        $temp->address =$req->address;
        

         request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $req->file('image')) {
           $destinationPath = 'public/image/'; 
           $profileImage ="$req->name".'.'.$files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
        }/*
        return Redirect::to("")
        ->withSuccess('Great! Image has been successfully uploaded.');
 
    }*/$temp->image=$destinationPath.$profileImage ;
       $check=$temp->save();
        if($check > 0)
        {
            $req->session()->flash('detail','Student detail submitted successfully!');
            return redirect('/studentdetailshow');
        }
    }

    function editstudent(Request $req, $id)
    {
              $detail =  studentdetail::where('id',$id)->first();
          
             return view('studentdetailupdate', compact('detail'));
    }

    function updateStudentDetails(Request $req)
    {

        $id = $req->id;

       
        $temp =studentdetail::find($id);
        $temp->name=$req->name;
        $temp->rollno=$req->rollno;
        $temp->email=$req->email;
        $temp->class=$req->class;
        $temp->address=$req->address;

        $check=$temp->save();
        if($check > 0)
        {  
            return redirect('/studentdetailshow');
        }

    }

    function deleteStudentdetails(Request $req,$id)
    {
        $temp=studentdetail::find($id);
        $check=$temp->delete();
        if($check >0)
        {
            $req->session()->flash('detail','Student details deleted!');
            return redirect('/studentdetailshow');
        }

    } 
  
}
