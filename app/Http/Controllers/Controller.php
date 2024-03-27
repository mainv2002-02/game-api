<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct()
    {
        if (!Auth::check()) {
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
    }
}
