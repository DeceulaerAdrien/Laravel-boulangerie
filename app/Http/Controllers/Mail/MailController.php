<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Test;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $mailData = [
            "name" => "Adrien",
            "dob" => "19/08/1997"
        ];
        Mail::to("hello@example.com")->send(new Test($mailData));
    }
}
