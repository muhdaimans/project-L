<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class EmailVerifcation extends Controller
{
    public function index() {

        return view('emailVerification.index');

    }

    public function send (Request $request) {
        // dd($request);

        $emailAddress = $request->email;
        Mail::to($emailAddress)->send(new SendEmail($emailAddress));
        
        Alert::success('Email Sent', 'Email is waiting to verify!');
        return view('home');
    }
}
