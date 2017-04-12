<?php

namespace Kata\Ingredient;

use Kata\Ingredient;

class Poulet extends Ingredient
{
    public function __construct()
    {
        parent::__construct('poulet', false);
    }
}
