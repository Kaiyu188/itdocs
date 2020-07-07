<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    //
    public function index() {
        $active = 'HOME';
        return view('backend.home.index', compact('active'));
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->intended('quantri');
    }
}
