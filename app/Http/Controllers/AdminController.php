<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Mail\ApprovalMail;
use App\Mail\RejectionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * This controller performs all the admin functions
     * It returns all applications
     * reject application feature
     * accept application feature
     * view application
     */

    //this function returns all applicatoin
    public function index(){
        return view('admin',[
            "applications" => Application::all()
        ]);
    }

    //this function performs the rejection and send mail to candidate
    public function rejectApplication($id){
        $userApplication = Application::find($id);
        $userApplication->status = false;
        $userApplication->save();

        //send user a rejection mail
        Mail::to($userApplication->email)->send(new RejectionMail($userApplication->name));
           return redirect()->back()->with("success", "Rejected Successfully");

    }
    
    //this function perform the approval and send mail to candidate
     public function approveApplication($id){
        $userApplication = Application::find($id);
        $userApplication->status = true;
        $userApplication->save();

        //send user an acceptance mail mail   
          Mail::to($userApplication->email)->send(new ApprovalMail($userApplication->name));
             return redirect()->back()->with("success", "Approved Successfully");
    }

    //this function view a candidate application
     public function viewApplication($id){
    $userApplication = Application::find($id);

    return view('application',[
        'userAppliation'=> $userApplication
    ]);
        
    }
}