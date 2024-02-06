<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//NAVIGATION CLIENT SIDE

Route::get('/', function () {return view('client.menu');});
Route::get('/reservations', function () {return view('client.reservations');});
Route::get('/about', function () {return view('client.about');});


//NAVIGATION EMPLOYEES SIDE

Route::get('/users', function () {return view('users.calendar');});
Route::get('/users/kitchen', function () {return view('users.kitchen');});

Route::get('/users/tables', function () {return view('users.tables');});

//LOGIN SYSTEM
Route::post('/users/register', [UserController::class, 'register']);
Route::post('/users/login', [UserController::class, 'login']);
Route::post('/users/logout', [UserController::class, 'logout']);
Route::get('/users/logout', [UserController::class, 'logout']);


Route::get('/users/tables', function () {return view('users.tables');});
