<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function login() {
        return view('user.login');
    }
}
