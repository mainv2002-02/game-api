<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Lumen\Http\Redirector;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function home(): View
    {
        if (!Auth::check()) {
            // Will replace by SSO
            $time = time();
            $user = User::create([
                                     'azure_id'   => $time,
                                     'name'       => "User{$time}",
                                     'email'      => "mail{$time}@mail.com",
                                     'phone'      => $time,
                                     'title'      => 'Ms/Mr',
                                     'department' => 'Supply Chain',
                                     'area'       => 'HCM',
                                 ]);
            Auth::login($user);
        }
        return view('auth.home');
    }

    public function login()
    {
        return Socialite::driver('saml2')->redirect();
    }

    public function acs(BaseRequest $request)
    {
        $user = Socialite::driver('saml2')->user();
        var_dump($user);
    }
}