<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    public function indexHome(): View
    {
        return view('home.index_home');
    }

    public function indexKickoff(): View
    {
        return view('home.index_kickoff');
    }

    public function indexCharacter(): View
    {
        return view('home.index_character');
    }

    public function index(): View
    {
        return view('home.index');
    }

    public function gift(): View
    {
        return view('home.gift');
    }
}
