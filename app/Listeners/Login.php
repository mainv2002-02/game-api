<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Slides\Saml2\Events\SignedIn;

class Login extends SignedIn
{
    public function handle(SignedIn $event): void
    {
        $samlUser = $event->getSaml2User();
        $attributes = $samlUser->getAttributes();
        $user = User::updateOrCreate([
                                         'azure_id' => $samlUser->getUserId(),
                                     ], [
                                         'full_name'     => $attributes['http://schemas.microsoft.com/identity/claims/displayname'][0] ?? '',
                                         'email'         => $attributes['http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress'][0] ?? '',
                                         'name'          => $attributes['http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name'][0] ?? '',
                                         'token'         => $attributes['http://schemas.microsoft.com/identity/claims/tenantid'][0] ?? '',
                                         'refresh' => $attributes['http://schemas.microsoft.com/identity/claims/objectidentifier'][0] ?? '',
                                     ]);
        Auth::login($user);
    }
}
