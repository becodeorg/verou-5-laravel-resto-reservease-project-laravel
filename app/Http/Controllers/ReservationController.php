<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index () {
        return view('reservations.index');
    }

    public function create() {

    }
}
