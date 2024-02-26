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
    public function login(): View
    {
        return view('auth.login');
    }

    public function doLogin(): RedirectResponse|Redirector
    {
        return Socialite::driver('azure')->redirect();
    }

    public function logout(BaseRequest $request): RedirectResponse|Redirector
    {
        Auth::guard('web')->logout();
        $request->session()->flush();
        $azureLogoutUrl = Socialite::driver('azure')->getLogoutUrl(route('login'));
        return redirect($azureLogoutUrl);
    }

    public function callback(): RedirectResponse|Redirector
    {
        $azureUser = Socialite::driver('azure')->user();

        $user = User::updateOrCreate([
                                         'azure_id' => $azureUser->id,
                                     ], [
                                         'name'          => $azureUser->name,
                                         'email'         => $azureUser->email,
                                         'token'         => $azureUser->token,
                                         'refresh_token' => $azureUser->refreshToken,
                                     ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}