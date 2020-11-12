<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function valid(Request $request) {
        $user = $request ->input('user');
        $password = $request ->input('password');

        if($user == "leonardo" && $password=="12345"){
            return view('index');
        }
        else echo "login was failed";
    }

    public function login() {
        return view('login');
    }
}

