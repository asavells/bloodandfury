<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class UserController extends Controller
{
    public function index()
    {
        return Socialite::driver('discord')->user();
    }
}
