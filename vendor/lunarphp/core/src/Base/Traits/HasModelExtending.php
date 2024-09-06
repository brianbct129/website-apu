<?php

namespace Lunar\Base\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Lunar\Facades\ModelManifest;

trait HasModelExtending
{
    public function newModelQuery(): Builder
    {
        $realClass = static::modelClass();

        // If they are both the same class i.e. they haven't changed
        // then just call the parent method.
        if ($this instanceof $realClass) {
            return parent::newModelQuery();
        }

        return $this->newEloquentBuilder(
            $this->newBaseQueryBuilder()
        )->setModel(new $realClass($this->toArray()));
    }

    public static function __callStatic($method, $parameters)
    {
        if (
            ! static::isLunarInstance()
        ) {
            $extendedClass = static::modelClass();

            return (new $extendedClass)->$method(...$parameters);
        }

        return (new static)->$method(...$parameters);
    }

    /**
     * Returns the model class registered in the model manifest.
     */
    public static function modelClass(): string
    {
        $contractClass = ModelManifest::guessContractClass(static::class);

        return ModelManifest::get($contractClass) ?? static::class;
    }

    public static function isLunarInstance(): bool
    {
        return static::class == static::modelClass();
    }

    public static function observe($classes): void
    {
        $instance = new static;

        if (
            ! static::isLunarInstance()
        ) {
            $extendedClass = static::modelClass();
            $instance = new $extendedClass;
        }

        foreach (Arr::wrap($classes) as $class) {
            $instance->registerObserver($class);
        }
    }
}
