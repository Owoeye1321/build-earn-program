<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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
    try{
    $request->validate([
        "name" => "required",
        "email" => "required",
        "phone_number" => "required",
        "title" => "required",
        "location" => "required",
        "file" =>["required", "file", "mimes:pdf", "max:2048"]
    ]);

    // No need to check $request->fails(), Laravel will handle validation failure

    $path = $request->file('file')->store('uploads', 'public');
    $email = $this->test_data($request->input("email"));
    // Check if a record with the same email address already exists
    $existingRecord = Application::where('email', )->first();
    if($existingRecord){
         return redirect()->back()->with('error', 'Email address is already in use');
    }
    $application = new Application();
    $application->name = $this->test_data($request->input("name"));
    $application->email = $email;
    $application->phone_number = $this->test_data($request->input("phone_number"));
    $application->title = $this->test_data($request->input("title"));
    $application->file = $path;
     $application->status = false;
    $application->location = $this->test_data($request->input("location"));
     $application->save();
         Mail::to($application->email)->send(new WelcomeMail($application->name));
    return redirect()->back()->with("success", "Applied Successfully");
     } catch (QueryException $e) {
        if ($e->errorInfo[1] === 1062) {
            // Handle the duplicate entry error
            return redirect()->back()->with("error", "an error occured");
        }

        // Handle other query exceptions if necessary
        return redirect()->back()->with("error", "An error occurred while processing your request");
    }
}
   
}