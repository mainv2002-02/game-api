<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Auth\Authorizable;

class User extends BaseModel implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    protected static array $instances = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'azure_id',
        'token',
        'full_name',
        'phone',
        'email',
        'title',
        'department',
        'area',
        'avatar',
        'current_hero',
        'data',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
    ];

    protected function data(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => json_decode($value, true),
            set: fn(?array $value) => json_encode($value)
        );
    }

    public function getRecords(): Collection
    {
        return Record::query()
                     ->select()
                     ->addSelect(DB::raw('SUM(point) as points'))
                     ->where('user_id', Auth::id())
                     ->groupBy('question_id')
                     ->orderBy('question_id')
                     ->get();
    }
}
