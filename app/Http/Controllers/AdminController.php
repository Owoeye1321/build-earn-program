<?php

namespace App\Http\Controllers;
namespace App\Models\Application;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin',[
            "applications" => Application::all()
        ]);
    }
    public function rejectApplication($id){

    }
     public function approveApplication($id){
        
    } public function viewApplication($id){
        
    }
}