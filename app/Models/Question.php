<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Question extends BaseModel
{
    protected static array $instances = [];

    public $fillable = [
        'hero_id',
        'title',
        'description',
        'option',
        'avatar',
        'order',
    ];

    public function track(): BelongsTo
    {
        return $this->belongsTo(Track::class);
    }

    protected function answer(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => json_decode($value, true),
            set: fn(?array $value) => json_encode($value)
        );
    }

    public static function getLastQuestion(): ?Question
    {
        $maxQuestionId = Record::query()
                               ->where('user_id', Auth::id())
                               ->whereNested(function ($query) {
                                   return $query->where('point', '>=', 1)
                                                ->orWhere('times', 2);
                               })
                               ->max('question_id');
        return !empty($maxQuestionId) ? Question::getInstance($maxQuestionId) : null;
    }
}