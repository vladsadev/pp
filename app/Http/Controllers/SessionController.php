<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate
        $validatedAttributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //an attempt to log in the user
        if (!Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                'email' => "Sorry, those credentials do not match."
            ]);
        }

        // regenerate de session token
        request()->session()->regenerate();

        //redirect
        return redirect('/');

    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }

}
