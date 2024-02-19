<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GameController extends Controller
{
    public function show(): View
    {
        return view('game.question-detail');
    }

    public function answer(): View
    {
        return view('game.question-detail');
    }
}