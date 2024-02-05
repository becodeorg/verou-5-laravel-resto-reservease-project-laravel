<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
        $inputs = $request->validate([
            'name' => 'required|min:3',
            'password' => 'required|min:3', 
            'password-check' => 'required|min:3'
        ]);

        if ($request['password'] === $request['password-check']) {
            dd($request);
        };
        return redirect('/employees');
    }

    public function login(Request $request) {
        return redirect('/employees');
    }

    public function logout(Request $request) {
        return redirect('/');
    }

}
