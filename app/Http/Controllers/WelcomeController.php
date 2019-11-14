<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function sendMail(){
        echo "Mail Sending...";
        Mail::to('amriteshonly4u@gmail.com')
            // ->cc($moreUsers)
            // ->bcc($evenMoreUsers)
            ->send(new SendMail());
        echo "Mail Sent....";
    }
}
