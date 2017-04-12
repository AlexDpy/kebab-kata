<?php

namespace Kata\Ingredient;

use Kata\Ingredient;

class Tomate extends Ingredient
{
    public function __construct()
    {
        parent::__construct('tomate', true, true);
    }
}
