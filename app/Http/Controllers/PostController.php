<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function homepage()
    {
        return view('homePage');
    }

    public function contactPage()
    {
        return view('contactPage');
    }

    public function productPage()
    {
        return view(('productPage'));
    }
}
