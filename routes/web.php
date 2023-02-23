<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/', [PostController::class, 'homepage'])->name('home');
Route::get('/contactez-nous', [PostController::class, 'contactPage'])->name('contact');
Route::get('/nos-produits', [PostController::class, 'productPage'])->name('products');

//Mail Route
Route::post('/contactez-nous/envoyer',)->name('sendMail');
