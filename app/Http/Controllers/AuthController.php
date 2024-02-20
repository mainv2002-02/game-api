<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function doLogin(): mixed
    {
        return Socialite::driver('azure')->redirect();
    }
}