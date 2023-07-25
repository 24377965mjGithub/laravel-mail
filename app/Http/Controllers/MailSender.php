<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;

class MailSender extends Controller
{
    public function send() {
        if (Mail::to('mjespelita.swashed@gmail.com')->send(new HelloMail())) {
            return response()->json('Email Sent');
        }
    }
}
