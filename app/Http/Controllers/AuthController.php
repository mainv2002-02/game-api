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

    public function doLogin():RedirectResponse|Redirector
    {
        return redirect('/update-profile');
    }

    public function getUpdateProfile()
    {
        return view('auth.update-profile');
    }

    public function postUpdateProfile()
    {
        //save and redirect
        return redirect('/games');
    }

    public function logout(BaseRequest $request): RedirectResponse|Redirector
    {
        Auth::guard('web')->logout();
        $request->session()->flush();
        return redirect('/');
    }

    public function callback(BaseRequest $request)
    {
        dd($request->all());
    }
}