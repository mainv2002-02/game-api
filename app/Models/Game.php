<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends BaseModel
{
    protected static array $instances = [];

    public function options(): HasMany
    {
        return $this->hasMany(GameOption::class);
    }
}