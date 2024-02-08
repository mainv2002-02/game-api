<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rank extends BaseModel
{
    protected static array $instances = [];
    public $fillable = [
        'hero_id',
        'user_id',
        'point',
        'bonus',
        'description',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'user_id');
    }

    public function hero(): BelongsTo
    {
        return $this->belongsTo(Hero::class, 'foreign_key', 'hero_id');
    }
}