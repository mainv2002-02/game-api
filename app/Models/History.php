<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends BaseModel
{
    protected static array $instances = [];
    public $fillable = [
        'user_id',
        'question_id',
        'option_id',
        'hero_id',
        'description',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function option(): BelongsTo
    {
        return $this->belongsTo(Option::class);
    }

    public function hero(): BelongsTo
    {
        return $this->belongsTo(Track::class);
    }
}