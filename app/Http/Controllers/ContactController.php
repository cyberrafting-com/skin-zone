<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ContactController extends Controller
{  
    public function sendEmail(Request $request){
        $rules = [
            'fname' => 'required|max:255',                       
            'mail' => 'required|email',
            'phone' => 'required',           
            'msg' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
       
       
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email',
        //     'message' => 'required',
        // ]);
       
        $data=[
            "fname"=>$request->post('fname'),                       
            "mail"=>$request->post('mail'),
            "phone"=>$request->post('phone'),            
            "msg"=>$request->post('msg'),
        ];
        $recipient = 'tejaswinipatil884@gmail.com';
        $subject = 'Appointment Message From Skin Zone';    

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($recipient, $subject) {
            $message->to($recipient)
                    ->subject($subject);
        });

        return redirect()->back()->with('success', 'We have received your query. thank you');
   
        // dd($data);
        // echo "next";         
    }            
}