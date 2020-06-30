<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    Public function Register(){
        return view('register');
    }
    public function Welcome(){
        return view('welcome');
    }
}
