<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function(){
    return view('form');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/create', [RegisterController::class, 'userCreate']);


Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::resource('/login', LoginController::class);
Route::resource('home', HomeController::class);