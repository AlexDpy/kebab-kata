<?php

namespace Kata;

use Kata\Ingredient\Fromage;
use Kata\Ingredient\Oignon;

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

    public function isPescetarian()
    {
        foreach ($this->ingredients as $ingredient) {
            if (!$ingredient->isPescetarian()) {
                return false;
            }
        }
        return true;
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

    public function doubleFromage() {
        $newKebab = new Kebab();

        foreach ($this->getIngredients() as $ingredient) {
            $newKebab->addIngredient($ingredient);
            if ($ingredient instanceof Fromage) {

                $newKebab->addIngredient(new Fromage());
            }
        }
        return $newKebab;
    }

    public function removeOignons() {

        $newKebab = new Kebab();

        foreach ($this->getIngredients() as $ingredient) {

            if ($ingredient instanceof Oignon) {
                continue;
            }
            $newKebab->addIngredient($ingredient);
        }
        return $newKebab;

    }
}
