<?php
/**
 * User: vianney-evaneos
 * Date: 12/04/2017
 * Time: 15:00
 */

namespace Kata;

use Kata\Ingredient\Fromage;
use Kata\Ingredient\Oignon;

class KebabBuilder
{

    static public function doubleFromage(Kebab $kebab) {
        $newKebab = new Kebab();

        foreach ($kebab->getIngredients() as $ingredient) {
            $newKebab->addIngredient($ingredient);
            if ($ingredient instanceof Fromage) {

                $newKebab->addIngredient(new Fromage());
            }
        }
        return $newKebab;
    }

    static public function removeOignons(Kebab $kebab) {

        $newKebab = new Kebab();

        foreach ($kebab->getIngredients() as $ingredient) {

            if ($ingredient instanceof Oignon) {
                continue;
            }
            $newKebab->addIngredient($ingredient);
        }
        return $newKebab;

    }
}