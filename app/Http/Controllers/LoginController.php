<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index() {
        return view ('login');
    }

    public function actionLogin (Request $request) {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Jika email dan password benar
        if (Auth::attempt($validate)) {
            return redirect()->intended('admin/dashboard');
        }

        // return redirect()->to('login');
        return back()->withErrors(['email' => 'please check your email and password'])->withInput();
    }

    public function logout () {
        Auth::logout();
        return redirect()->to('login');
    }
}
