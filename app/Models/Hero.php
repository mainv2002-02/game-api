<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function questions(): HasMany
    {
        return $this->hasMany(Track::class);
    }
}