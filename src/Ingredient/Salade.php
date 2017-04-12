<?php

namespace Kata\Ingredient;

use Kata\Ingredient;

class Salade extends Ingredient
{
    public function __construct()
    {
        parent::__construct('salade', true, true);
    }
}
