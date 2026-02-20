<?php

namespace App\jour2;

abstract class Animal
{
    protected string $nom;
    protected int  $age;
    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }

    abstract public function parler();
}