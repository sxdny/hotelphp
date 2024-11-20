<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $userId = request()->cookie('userId');
        return view('auth.login', ['showNavigation' => false, $userId]);
    }   
}
