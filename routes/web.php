<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\http\Controllers\HomeController;
use App\http\Controllers\RegisterController;
use App\http\Controllers\DashboardController;
use App\http\Controllers\ReservationController;

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
Route::get('/', function () {return view('home.index');})->name("home");
Route::get('/Menu', function () {return view('menu.index');})->name("menu");
Route::get('/Reservation', [ReservationController::class, 'index'])->name("reservations");
Route::get('/About', function () {return view('about.index');})->name("about");
Route::get('/Contact', function () {return view('contact.index');})->name("contact");

// Route::get('/login', function () {return view('employees.login');});




//NAVIGATION EMPLOYEES SIDE
Route::get('/Dashboard', [DashboardController::class, 'index'])->name("showDashboard");
Route::get('/Dashboard/Reservations', [DashboardController::class, 'show'])->name("showReservations");
Route::get('/Dashboard/Kitchen', [DashboardController::class, 'editKitchen'])->name("editKitchen");
// Route::get('/Dashboard/', [DashboardController::class, 'index'])->name("");
// Route::get('/employees', function () {return view('employees.calendar');});
Route::get('/employees/kitchen', function () {return view('employees.kitchen');});

Route::get('/employees/tables', function () {return view('employees.tables');});

// LOGIN & LOGOUT
Route::get('/Login', [UserController::class, 'index'])->name("showLogin");
Route::post('/Login', [UserController::class, 'login'])->name("postLogin");
Route::post('/Logout', [UserController::class, 'logout'])->name("postLogout");

// REGISTRATION
Route::get("/Register", [RegisterController::class, 'index'])->name("showRegister");
Route::post("/Register", [RegisterController::class, 'register'])->name("handleRegister");

Route::resource('menus', 'MenuController');
Route::resource('orders', 'OrderController');
Route::resource('products', 'ProductController');
Route::resource('reservations', 'ReservationController');
Route::resource('tables', 'TableController');





// Route::get('/employees/tables', function () {return view('employees.tables');});
