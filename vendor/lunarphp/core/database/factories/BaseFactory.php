<?php

namespace Lunar\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

abstract class BaseFactory extends Factory
{
    public function modelName()
    {
        return (new $this->model)::modelClass();
    }
}
