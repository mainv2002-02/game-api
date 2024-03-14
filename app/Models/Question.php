<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function hero(): BelongsTo
    {
        return $this->belongsTo(Track::class);
    }
}