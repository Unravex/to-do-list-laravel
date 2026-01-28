<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegistrationRequest;


class UserController extends Controller
{
    public function login() 
    {
        return view('pages.login');
    }

    public function loginPost(UserLoginRequest $request) 
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Неверный email или пароль',
            ]);
        }

        request()->session()->regenerate();

        return redirect()->intended(route('task.list'));
    }

    public function registration() 
    {
        return view('pages.registration');
    }

    public function registrationPost(UserRegistrationRequest $request) 
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::attempt($request->only('name', 'password'));
        return redirect()->route('task.list');
    }

    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}