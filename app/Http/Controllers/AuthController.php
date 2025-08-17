<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm(Request $request) {
        $data = ['pageTitle' => 'Login'];
        return View('back.pages.auth.login', $data);
    }

    public function forgotForm(Request $request) {
        $data = ['pageTitle' => 'Forgot Password'];
        return View('back.pages.auth.forgot', $data);
    }
}
