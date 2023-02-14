<?php

namespace App\Http\Controllers\Mail;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{

    public function sendContactMail()
    {
        $user = ['email' => "test@mail.test"];
        Mail::to($user['email'])->send(new ContactMail());
    }
}
