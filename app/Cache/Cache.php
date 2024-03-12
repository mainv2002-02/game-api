<?php

namespace App\Cache;

use Closure;
use Illuminate\Cache\TaggedCache;
use Illuminate\Support\Facades\Cache as CacheLib;

class Cache
{
    protected ?TaggedCache $tags;

    protected ?string $key;
    private ?int $ttl;

    public function __construct(array $options = [])
    {
        $this->tags = CacheLib::tags($options['tags'] ?? []);
        $this->ttl = $options['ttl'] ?? config('database.redis.options.ttl');
        $this->key = $options['key'] ?? '';
    }

    public function remember(Closure $closure): mixed
    {
        return $this->tags
            ->remember(
                $this->key,
                $this->ttl,
                $closure
            );
    }

    public function get(): mixed
    {
        return $this->tags->get($this->key);
    }

    public function forget(): bool
    {
        return $this->tags->forget($this->key);
    }

    public function put($data): bool
    {
        return $this->tags->put($this->key, $data, $this->ttl);
    }

    public function flushByTags(): bool
    {
        $this->flushByPattern();
        return $this->tags->flush();
    }

    public function flushByPattern(): void
    {
        $taggedCache = $this->tags;
        $store = $taggedCache->getStore();
        $connection = $store->connection();

        foreach ($taggedCache->getTags()->getNames() as $name) {
            $tagKey = $taggedCache->getTags()->tagKey($name);
            $cursor = $defaultCursorValue = '0';

            do {
                [$cursor, $entries] = $connection->zscan(
                    $store->getPrefix() . $tagKey,
                    $cursor,
                    ['match' => '*', 'count' => 1000]
                );

                if (!is_array($entries)) {
                    break;
                }

                $entries = array_unique(array_keys($entries));
                array_walk($entries, function (&$value) use ($store) {
                    $value = $store->getPrefix() . $value;
                });
                if (count($entries)) {
                    $connection->del($entries);
                }

            } while (((string)$cursor) !== $defaultCursorValue);
        }
    }
}
