<?php

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

Route::get('/employees', function () {return view('employees.calendar');});
Route::get('/employees/kitchen', function () {return view('employees.kitchen');});
Route::get('/employees/tables', function () {return view('employees.tables');});


