<?php

namespace App\Utilities;


use App\Models\User;

class ProfileUtility extends Utility
{
    private ?User $profile = null;


    public function getProfile(): User
    {
        return $this->profile;
    }

    public function setProfile(User $profile): void
    {
        $this->profile = $profile;
    }
}