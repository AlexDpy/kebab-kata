<?php

namespace Kata;

class Kebab
{
    /**
     * @var IngredientInterface[]
     */
    private $ingredients;

    public function __construct(array $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    /**
     * @return bool
     */
    public function isVegetarian()
    {
        foreach ($this->ingredients as $ingredient) {
            if (!$ingredient->isVegetarian()) {
                return false;
            }
        }

        return true;
    }

    public function isPescetarian()
    {
        foreach ($this->ingredients as $ingredient) {
            if (!$ingredient->isPescetarian()) {
                return false;
            }
        }
        return true;
    }
}
