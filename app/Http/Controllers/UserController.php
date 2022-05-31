<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show Register/Create Form
    public function create() {
        return view('resources.views.layouts.sn');
    }

    public function store(Reguest $reguest)
    {
        $formFields = $reguest->validate([
            'name' => ['reguired', 'min:3'],
            'email' => ['reguired', 'email', Rule::unique('users', 'email')],
            'password' => 'reguired|confirmed|min:6'
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
}

public function logout(Reguest $reguest) {
        auth()->logout();

        $reguest->session()->invalidate();
        $reguest->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
}

public function login() {
        return view('pages.list.refistration.rg');
}

public function authenticate(Reguest $reguest) {
        $formFields = $reguest->validate([
            'email' => ['reguired', 'email'],
            'password' => 'reguired'
        ]);

        if(auth()->attempt($formFields)) {
            $reguest->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
