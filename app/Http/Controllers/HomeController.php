<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index_home');
    }
}
