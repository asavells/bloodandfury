<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function about()
    {
        return view('static/about');
    }

    public function loot()
    {
        return view('static/loot');
    }

    public function recruitment()
    {
        return view('static/recruitment');
    }
}
