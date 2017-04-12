<?php

namespace Tests\Kata;

use Kata\Ingredient;
use Kata\Kebab;
use PHPUnit\Framework\TestCase;

class KebabTest extends TestCase
{
    public function testIsVegetarian()
    {
        $kebab = new Kebab([
            new Ingredient\Pain(),
            new Ingredient\Salade(),
            new Ingredient\Tomate(),
            new Ingredient\Oignon(),
            new Ingredient\Fromage(),
        ]);

        $this->assertTrue($kebab->isVegetarian());
    }

    public function testIsNotVegetarian()
    {
        $kebab = new Kebab([
            new Ingredient\Pain(),
            new Ingredient\Salade(),
            new Ingredient\Tomate(),
            new Ingredient\Oignon(),
            new Ingredient\Fromage(),
            new Ingredient\Poulet(),
        ]);

        $this->assertFalse($kebab->isVegetarian());
    }

    public function testIsPescterian()
    {
        $kebab = new Kebab([
            new Ingredient\Pain(),
            new Ingredient\Salade(),
            new Ingredient\Tomate(),
            new Ingredient\Oignon(),
            new Ingredient\Fromage(),
        ]);

        $this->assertTrue($kebab->isPescetarian());
    }

    public function testIsPescterianWithCrevettes()
    {
        $kebab = new Kebab([
            new Ingredient\Pain(),
            new Ingredient\Salade(),
            new Ingredient\Tomate(),
            new Ingredient\Oignon(),
            new Ingredient\Fromage(),
            new Ingredient\Crevette(),
        ]);

        $this->assertTrue($kebab->isPescetarian());
    }

    public function testIsPescterianWithCrevettesAndMeat()
    {
        $kebab = new Kebab([
            new Ingredient\Pain(),
            new Ingredient\Salade(),
            new Ingredient\Tomate(),
            new Ingredient\Oignon(),
            new Ingredient\Fromage(),
            new Ingredient\Crevette(),
            new Ingredient\Boeuf(),
        ]);

        $this->assertFalse($kebab->isPescetarian());
    }
}
