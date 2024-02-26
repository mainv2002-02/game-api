<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends BaseModel
{
    protected static array $instances = [];
    public $fillable = [
        'user_id',
        'question_id',
        'option_id',
        'hero_id',
        'description',
        'times',
        'point',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}