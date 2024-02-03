<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameOption extends BaseModel
{
    protected static array $instances = [];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class, 'foreign_key', 'game_id');
    }
}