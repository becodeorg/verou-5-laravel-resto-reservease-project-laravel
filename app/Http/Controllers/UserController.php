<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

    public function login(Request $request) {
        $incomingFields = $request -> validate([
            'loginname' => 'required',
            'loginpassword' =>'required'
        ]);

        if(auth()->attempt(['name' => $incomingFields['loginname'],  'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
        }
        return redirect('/employees');
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/');
    }
// jdkfj

    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:12', Rule::unique('users','name')],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => ['required','min:5'], 
            'password-check' => ['required','min:5', 'same:password']
        ], [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least :min characters.',
            'name.max' => 'The name may not be greater than :max characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'password-check.same' => "Passwords do not match, please try again"
        ]);

        if ($request['password'] === $request['password-check']) {
            $incomingFields['password'] = bcrypt($incomingFields['password']);
            $user = User::create($incomingFields);
            auth()->login($user);
        };
        return redirect('/employees');
    }




}
