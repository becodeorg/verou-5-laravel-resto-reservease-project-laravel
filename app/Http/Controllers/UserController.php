<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function login(Request $request) {
        $incomingFields = $request -> validate([
            'loginname' => 'required',
            'loginpassword' =>'required'
        ]);

        if(auth()->attempt(['name' => $incomingFields['loginname'],  'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
            return redirect('/Dashboard');
        } else {
            return back()->withErrors(['loginpassword' => 'Invalid username or password.'])->withInput();
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/');
    }
}