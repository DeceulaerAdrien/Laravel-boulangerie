<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function homepage()
    {
        return view('homePage');
    }

    public function contactpage()
    {
        return view('contactPage');
    }

    public function productpage()
    {
        return view('productPage');
    }
}
