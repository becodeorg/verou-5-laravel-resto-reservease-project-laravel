<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            $inputs['password'] = bcrypt($inputs['password']);
            $user = User::create($inputs);
            auth()->login($user);
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
