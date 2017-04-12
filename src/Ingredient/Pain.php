<?php

namespace Kata\Ingredient;

use Kata\Ingredient;

class Pain extends Ingredient
{
    public function __construct()
    {
        parent::__construct('pain', true, true);
    }
}
