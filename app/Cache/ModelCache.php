<?php

namespace App\Cache;

use App\Models\BaseModel;
use Illuminate\Support\Str;

class ModelCache extends Cache
{
    const LEVEL_TABLE = 1;
    const LEVEL_CORE  = 2;
    const LEVEL_LIST  = 3;

    const PREFIX_LIST = 'LIST_';

    /**
     * @param BaseModel $instance
     * @param mixed $id
     * @return BaseModel|null
     */
    public static function retrieveInstance(BaseModel $instance, mixed $id): ?BaseModel
    {
        $cache = new static(self::getCacheKey($instance, strval($id)));

        return $cache->remember(function () use ($instance, $id) {
            return $instance->find($id);
        });
    }

    /**
     * @param BaseModel $instance
     * @param string $id
     * @param string $listName
     * @return array
     */
    public static function getCacheKey(BaseModel $instance, mixed $id, string $listName = ''): array
    {
        $tags = [
            //Example: TICKETS
            self::LEVEL_TABLE => Str::upper($instance->getTable()),

            //Example: TICKETS_123
            self::LEVEL_CORE  => Str::upper($instance->getTable() . '_' . $id),
        ];

        //Example: MODULESTICKETMODELSTICKETS_123
        $key = Str::upper(Str::slug($instance::class) . '_' . $id);

        if (!empty($listName)) {
            //Example: MODULESTICKETMODELSTICKETS_123_CONTENTS
            $key = Str::upper(Str::slug($instance::class) . '_' . $id . '_' . $listName);

            //Example: LIST_TAG_ALL
            $tags[self::LEVEL_LIST] = Str::upper(self::PREFIX_LIST . $listName);
        }

        return [
            'key'  => $key,
            'tags' => $tags
        ];
    }

    /**
     * @param BaseModel $instance
     * @return bool
     */
    public static function forgetInstance(BaseModel $instance): bool
    {
        $cacheKey = self::getCacheKey($instance, $instance->getKey());
        $tag = $cacheKey['tags'][self::LEVEL_CORE] ?? $cacheKey['key'];

        $cache = new static(['tags' => $tag]);
        return $cache->flushByTags();
    }

    /**
     * @param BaseModel $parentInstance
     * @param string $listName
     * @return mixed
     */
    public static function getList(BaseModel $parentInstance, string $listName): mixed
    {
        $cache = new static(self::getCacheKey($parentInstance, $parentInstance->getKey(), $listName));
        return $cache->get();
    }


    /**
     * @param BaseModel $parentInstance
     * @param string $listName
     * @param $data
     * @return bool
     */
    public static function putList(BaseModel $parentInstance, string $listName, $data): bool
    {
        $cache = new static(self::getCacheKey($parentInstance, $parentInstance->getKey(), $listName));
        return $cache->put($data);
    }


    public static function forgetList(BaseModel $parentInstance, string $listName): bool
    {
        $cache = new static(self::getCacheKey($parentInstance, $parentInstance->getKey(), $listName));
        return $cache->forget();
    }


    /**
     * @param array $tags
     * @return bool
     */
    public static function flushByModelTags(array $tags): bool
    {
        if (empty($tags)) {
            return true;
        }

        $cache = new static(['tags' => $tags]);
        return $cache->flushByTags();
    }
}