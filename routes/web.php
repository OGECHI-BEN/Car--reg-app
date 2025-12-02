<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthenticationController;

use Illuminate\Support\Facades\Hash; // Add this line
use Illuminate\Http\Request;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/vehicleRegistration', function () {
    return view('vehicleRegistration');
});
Route::get('/vehicleinspection', function () {
    return view('vehicleinspection');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/renew', function () {
    return view('renew');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/Login', [CustomAuthenticationController::class,'Login']);
Route::get('/registration', [CustomAuthenticationController::class,'registration']);
Route::post('/register-user', [CustomAuthenticationController::class,'registerUser'])->name('register-user');
Route::post('/Login-user', [CustomAuthenticationController::class,'loginUser'])->name('Login-user');