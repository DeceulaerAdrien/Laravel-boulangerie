<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Mail\ContactMailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Pages Route
Route::get('/', [PostController::class, 'homepage'])->name('acceuil');
Route::get('/contactez-nous', [PostController::class, 'contactpage'])->name('contact');
Route::get('/nos-produits', [PostController::class, 'productpage'])->name('produits');

//Mail Route
route::get('/contact-mail', [ContactMailController::class, 'sendContactMail'])->name('contactMail');
