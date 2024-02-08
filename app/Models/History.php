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
        return $this->belongsTo(User::class, 'foreign_key', 'user_id');
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'foreign_key', 'question_id');
    }

    public function option(): BelongsTo
    {
        return $this->belongsTo(Option::class, 'foreign_key', 'option_id');
    }

    public function hero(): BelongsTo
    {
        return $this->belongsTo(Hero::class, 'foreign_key', 'hero_id');
    }
}