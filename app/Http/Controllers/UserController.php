<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function login(Request $request) {
        $credentials = $request -> validate([
            'name' => 'required',
            'password' =>'required',
        ]);
        
        $username=$credentials['name'];
        $password=$credentials['password'];

        if (Auth::attempt([
            'name'=>$username, 
            'password'=>$password
            ])) {
            return redirect()->intended('/Dashboard');
        }
        return back()->withErrors([
            'password' => 'Invalid credentials.',
        ])->onlyInput('password');
        }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/');
    }
}