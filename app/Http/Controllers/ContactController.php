<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    public function send(Request $request){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to($request->email)->send(new ContactUs($data));
        return "sent";
    }
}
