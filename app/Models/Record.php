<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Record extends BaseModel
{
    protected static array $instances = [];
    public $fillable = [
        'user_id',
        'hero_id',
        'track_id',
        'question_id',
        'option_id',
        'description',
        'times',
        'point',
        'data',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function answer(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => json_decode($value, true),
            set: fn(?array $value) => json_encode($value)
        );
    }
}