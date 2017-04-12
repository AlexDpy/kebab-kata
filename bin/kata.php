<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Kata\Ingredient;
use Kata\Kebab;



$kebab = new Kebab([
    new Ingredient\Pain,
    new Ingredient\Salade,
    new Ingredient\Tomate,
    new Ingredient\Oignon,
    new Ingredient\Boeuf,
]);

echo($kebab->removeOignons());


//dump($kebab->isVegetarian());
