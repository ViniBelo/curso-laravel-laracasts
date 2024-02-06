<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate
        ([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($attributes))
        {
            throw ValidationException::withMessages
            ([
                'email' => 'The provided credentials could not be verified.'
            ]);
        }

        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        session()->regenerate();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
