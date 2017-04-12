<?php

namespace Kata\Ingredient;

use Kata\Ingredient;

class Oignon extends Ingredient
{
    public function __construct()
    {
        parent::__construct('oignon', true, true);
    }

    public function isOignon()
    {
        return true;
    }
}
