<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function getLogin() {
        return view('backend.login.login');
    }

    public function postLogin(Request $request) {
        $arr = ['username' => $request->username, 'password' => $request->password];

        if ($request->rememberme = 'Remember me') {
            $remember = true;
        } else {
            $remember = false;
        }

        if (Auth::attempt($arr, $remember)) {
            return redirect()->intended('admin/home');
        } else {
            return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu không đúng !!!');
        }
    }
}
