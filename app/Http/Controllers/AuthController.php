<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use App\Logic\GameLogic;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Lumen\Http\Redirector;

class AuthController extends Controller
{
    public function __construct()
    {
    }

    public function home(BaseRequest $request): View|RedirectResponse|Redirector
    {
//        if (!Auth::check()) {
//            return redirect('/saml2/sso/login');
////            $user = User::updateOrCreate([
////                                             'email' => 'mainv2002@gmail.com',
////                                         ], [
////                                             'full_name' => 'Mai Nguyen',
////                                             'name'      => 'Mai Mai',
////                                             'token'     => '123',
////                                             'refresh'   => '321',
////                                         ]);
////            Auth::login($user);
//        }
//        if ($request->getMethod() === 'POST') {
//            $params = $request->all();
//            Auth::user()->update([
//                                     'phone'      => $params['phone'] ?? '',
//                                     'title'      => $params['title'] ?? '',
//                                     'department' => $params['department'] ?? '',
//                                     'area'       => $params['area'] ?? '',
//                                 ]);
//        }
//        /** @var GameLogic $gameLogic */
//        $gameLogic = GameLogic::getInstance();
//        if (!$gameLogic->finishAllTracks()) {
//            return redirect('/home');
//        }
        return view('auth.home');
    }
}