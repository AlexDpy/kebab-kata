<?php

namespace Kata\Ingredient;

use Kata\Ingredient;

class Boeuf extends Ingredient
{
    public function __construct()
    {
        parent::__construct('boeuf', false, false);
    }
}
