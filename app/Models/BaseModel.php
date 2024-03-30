<?php

namespace App\Models;

use App\Cache\ModelCache;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Throwable;

class BaseModel extends Model
{
    protected static array $instances = [];

    public $timestamps = false;

    protected $dateFormat = 'U';
    public static function boot(): void
    {
        parent::boot();

        self::creating(function($model){
            // ... code here
        });

        self::created(function($model){
            // ... code here
        });

        self::updating(function($model){
            // ... code here
        });

        self::updated(function($model){
            ModelCache::forgetInstance($model);
        });

        self::deleting(function($model){
            // ... code here
        });

        self::deleted(function($model){
            ModelCache::forgetInstance($model);
        });
    }

    /**
     * @param mixed $id
     * @param array $attributes
     * @return BaseModel|null
     * @throws Exception
     */
    public static function getInstance(mixed $id = null, array $attributes = []): ?BaseModel
    {
        try {
            $class = get_called_class();
            $key = Str::slug($class) . '|' . $id;

            if (!empty(static::$instances[$key])) {
                return static::$instances[$key];
            }

            $instance = new static($attributes);
            if ($id !== null) {
                $instance = ModelCache::retrieveInstance($instance, $id);
                if (empty($instance)) {
                    throw new Exception("Fail to create new instance: {$class}  id: $id");
                }
            }

            static::$instances[$key] = $instance;

            return static::$instances[$key];
        } catch (Exception $e) {
            unset(static::$instances[$key]);
            throw ($e);
        }
    }

    public static function cleanupInstance(): void
    {
        if (!empty(static::$instances)) {
            foreach (array_keys(static::$instances) as $key) {
                unset(static::$instances[$key]);
            }
        }
    }

    /**
     * @throws Throwable
     */
    public function beginTransaction(): void
    {
        DB::connection($this->connection)->beginTransaction();
    }

    /**
     * @throws Throwable
     */
    public function commit(): void
    {
        DB::connection($this->connection)->commit();
    }

    /**
     * @throws Throwable
     */
    public function rollBack(): void
    {
        DB::connection($this->connection)->rollBack();
    }
}
