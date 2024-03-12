<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Slides\Saml2\Events\SignedIn;

class Login extends SignedIn
{
    public function handle(Login $event): void
    {
        $messageId = $event->getAuth()->getLastMessageId();

        // your own code preventing reuse of a $messageId to stop replay attacks
        $samlUser = $event->getSaml2User();

//        $userData = [
//            'id'         => $samlUser->getUserId(),
//            'attributes' => $samlUser->getAttributes(),
//            'assertion'  => $samlUser->getRawSamlAssertion()
//        ];
        $attributes = $samlUser->getAttributes();

        $user = User::updateOrCreate([
                                         'azure_id' => $samlUser->getUserId(),
                                     ], [
                                         'name'          => $attributes['name'] ?? '',
                                         'email'         => $attributes['email'] ?? '',
                                         'token'         => $attributes['token'] ?? '',
                                         'refresh_token' => $attributes['refreshToken'] ?? '',
                                     ]);

        // Login a user.
        Auth::login($user);
    }
}
