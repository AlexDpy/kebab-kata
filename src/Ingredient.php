<?php

namespace Kata;

class Ingredient implements IngredientInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $vegetarian;

    /**
     * @var bool
     */
    private $pescetarian;

    /**
     * Ingredient constructor.
     *
     * @param string $name
     * @param        $vegetarian
     * @param bool   $pescetarian
     */
    public function __construct($name, $vegetarian, $pescetarian = true)
    {
        $this->name = $name;
        $this->vegetarian = $vegetarian;
        $this->pescetarian = $pescetarian;
    }

    public function isVegetarian()
    {
        return $this->vegetarian;
    }

    public function isPescetarian()
    {
        return $this->pescetarian;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
