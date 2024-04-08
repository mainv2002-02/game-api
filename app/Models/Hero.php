<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Hero extends BaseModel
{
    protected static array $instances = [];

    public $fillable = [
        'slug',
        'name',
        'description',
        'option',
        'avatar',
    ];

    public function tracks(): HasMany
    {
        return $this->hasMany(Track::class);
    }

    public function getTracks(): Collection
    {
        if (Auth::user()->hero_id == 3) {
            $result = new Collection();
            $data = Auth::user()->data;
            if (!empty($data['hero_3'])) {
                foreach ($data['hero_3'] as $trackId) {
                    $result->add(Track::getInstance($trackId));
                }
            }
        } else {
            $result = Track::query()
                           ->where('hero_id', Auth::user()->hero_id)
                           ->orderBy('id')
                           ->get();
        }
        return $result;
    }
}