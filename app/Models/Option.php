<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Option extends BaseModel
{
    protected static array $instances = [];

    public $fillable = [
        'question_id',
        'title',
        'description',
        'option',
        'avatar',
        'is_answer',
    ];
    public function game(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'foreign_key', 'question_id');
    }
}