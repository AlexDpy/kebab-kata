<?php

namespace Kata;

interface IngredientInterface
{
    /**
     * @return bool
     */
    public function isVegetarian();

    /**
     * @return bool
     */
    public function isPescetarian();
}
