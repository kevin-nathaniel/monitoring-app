<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            'name' => 'required',
            'uname' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        
        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login!');
    }
}
