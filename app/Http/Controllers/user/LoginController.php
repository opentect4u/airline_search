<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function ShowLogin(){
        return view('user.login');
    }
    public function Logout(){
        session()->flush();
        return redirect()->route('login');
    }
}
