<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration() {
        return view('pages.registration');
    }

    public function login() {
        return view('pages.login');
    }

    public function logout() {
        return 'Logout';
    }
}
