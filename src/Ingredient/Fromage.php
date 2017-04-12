<?php

namespace Kata\Ingredient;

use Kata\Ingredient;

class Fromage extends Ingredient
{
    public function __construct()
    {
        parent::__construct('fromage', true);
    }
}
