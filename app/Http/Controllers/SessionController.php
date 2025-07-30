<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //attempt login the user
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, the provided credentials do not match',
            ]);
        }
        ;

        //regenerate the session
        request()->session()->regenerate();

        //redirect
        return redirect('/');
    }

    public function destroy(string $id)
    {
        Auth::logout();
        return redirect('/');
    }
}
