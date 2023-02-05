<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function homepage()
    {
        Storage::disk('local')->put('', '');
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
