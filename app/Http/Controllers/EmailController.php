<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendWelcomeEmail(Request $request)
{
    try {
        $body = $request->message;

        Mail::to($request->to)->send(new WelcomeMail($body));
           
        return "Email sent successfully!";
    } catch (\Exception $e){
        return "Error occured";
      
}
}
}