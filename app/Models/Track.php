<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Track extends BaseModel
{
    protected static array $instances = [];

    public $fillable = [
        'hero_id',
        'slug',
        'name',
        'title',
        'description',
        'option',
        'avatar',
    ];
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}