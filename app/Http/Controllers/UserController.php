<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login() {
        return view('pages.login');
    }

    public function loginPost() {
        return 'LoginPost';
    }

    public function registration() {
        return view('pages.registration');
    }

    public function registrationPost() {
        return 'RegistrationPost';
    }

    public function logout() {
        return 'Logout';
    }
}
