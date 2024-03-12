<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Lumen\Http\Redirector;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function doLogin()
    {
    }

    public function logout(BaseRequest $request): RedirectResponse|Redirector
    {
        Auth::guard('web')->logout();
        $request->session()->flush();
        return redirect('/');
    }

    public function callback(): RedirectResponse|Redirector
    {
        return redirect('/dashboard');
    }
}