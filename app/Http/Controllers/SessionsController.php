<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attempt to authenicate and log in the user
        // based on the provided credentials
        if (! auth()->attempt($attributes)) {
            // auth failed.
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }
            session()->regenerate();
            // session fixation OWASP

            // redirect with a success flash message
            return redirect('/')->with('success', 'Welcome Back!');
        }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
