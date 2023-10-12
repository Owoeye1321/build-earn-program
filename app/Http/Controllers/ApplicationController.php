<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function test_data($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
            return $data;   
        }



    public function index(){
        return view('home');
    }

    public function apply(Request $request){
        $request->vaidate([
            "name" =>"required",
            "email" =>"required",
            "phone_number" =>"required",
            "title" =>"required",
            "location" =>"required",
            "image_url" =>"required|file|mimes:jpg,png,pdf|max:2048"
        ]);
        $path = $request->file('image_url')->store('uploads', 'public');
        $application = new Application();
        $application->name=$this->test_data($request->input("name")) ;
        $application->email=$this->test_data($request->input("email"));
        $application->phone_number=$this->test_data($request->input("phone_number"));
        $application->title=$this->test_data($request->input("title"));
        $application->image_url=$path;
        $application->location=$this->test_data($request->input("location"));
        $application->save();

        return redirect()->route('home')->with("message", "Applied Successfully");
    }
   
}