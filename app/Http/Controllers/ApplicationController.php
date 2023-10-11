<?php

namespace App\Http\Controllers;
namespace App\Models\Application;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //

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
            "image_url" =>"required"
        ]);

        $application = new Application();
        $application->name = $request->input("name");
        $application->email = $request->input("email");
        $application->phone_number = $request->input("phone_number");
        $application->title = $request->input("title");
        $application->location = $request->input("location");
        $application.save();

        return redirect()->route('home')->with("message", "Applied Successfully");
    }
}