<?php

use App\Http\Controllers\Exercice1Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [Exercice1Controller::class, 'index']);
Route::get('/about', [Exercice1Controller::class, 'about']);
Route::get('/service', [Exercice1Controller::class, 'service']);
Route::get('/portfolio', [Exercice1Controller::class, 'portfolio']);
Route::get('/contact', [Exercice1Controller::class, 'contact']);
Route::post('/contact', [Exercice1Controller::class, 'contactForm']);

