<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Slides\Saml2\Events\SignedIn;

class Logout extends SignedIn
{
    public function handle(Logout $event): void
    {
//        $samlUser = $event->getSaml2User();
//        $user = User::find($samlUser->getUserId());
        Auth::logout();
    }
}
