<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends BaseModel
{
    protected static array $instances = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }
}