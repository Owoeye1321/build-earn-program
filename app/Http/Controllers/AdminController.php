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
        try{
        $userApplication = Application::find($id);
        $userApplication->status = false;
        $userApplication->save();

        //send user a rejection mail
        Mail::to($userApplication->email)->send(new RejectionMail($userApplication->name));
           return redirect()->back()->with("success", "Rejected Successfully");

           } catch (\Exception $e) {
    // An error occurred while sending the email
    // Log the error, show a message, or perform error handling
    // For example, you can log the error and provide a message to the user
            \Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->back()->with('success', 'An error occurred while sending the email.');
        }

    }
    
    //this function perform the approval and send mail to candidate
     public function approveApplication($id){
        try{
        $userApplication = Application::find($id);
        $userApplication->status = true;
        $userApplication->save();

        //send user an acceptance mail mail   
          Mail::to($userApplication->email)->send(new ApprovalMail($userApplication->name));
             return redirect()->back()->with("success", "Approved Successfully");
              } catch (\Exception $e) {
    // An error occurred while sending the email
    // Log the error, show a message, or perform error handling
    // For example, you can log the error and provide a message to the user
            \Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->back()->with('success', 'An error occurred while sending the email.');
        }
    }

    //this function view a candidate application
     public function viewApplication($id){
    $userApplication = Application::find($id);

    return view('application',[
        'userAppliation'=> $userApplication
    ]);
        
    }
}