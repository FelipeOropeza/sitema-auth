<?php

namespace App\Controllers;

use Core\Http\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
