<?php

namespace Kata;

class Kebab
{
    /**
     * @var IngredientInterface[]
     */
    private $ingredients;

    public function __construct(array $ingredients = [])
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

    public function isPescterian()
    {
        foreach ($this->ingredients as $ingredient) {
            if (!$ingredient->isPescterian()) {
                return false;
            }
        }
    }

    public function addIngredient(Ingredient $ingredient) {
        $this->ingredients[] = $ingredient;
    }

    /**
     * @return IngredientInterface[]
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }


    public function __toString()
    {
        $list = "";
        foreach ($this->ingredients as $ingredient) {
            $list .= $ingredient->getName().'|';
        }
        return $list;
    }
}
