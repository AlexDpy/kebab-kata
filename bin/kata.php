<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Kata\Ingredient;
use Kata\Kebab;

$kebab = new Kebab([
    new Ingredient('pain', true),
    new Ingredient('salade', true),
    new Ingredient('tomate', true),
    new Ingredient('oignon', true),
    new Ingredient('boeuf', false),
]);

dump($kebab);


dump($kebab->isVegetarian());
