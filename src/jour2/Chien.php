<?php

namespace App\jour2;

class Chien extends Animal
{
    public function parler()
    {
        echo "\nje suis $this->nom : Woof $this->motFavoie";
    }
}