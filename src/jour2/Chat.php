<?php

namespace App\jour2;

class Chat extends Animal
{
    public function parler()
    {
        echo "\nje suis $this->nom : Miaou";
    }
}