<?php

namespace App\jour2;

class Perroquet extends  Animal
{
    private string $motFavoie;
    public function __construct($nom, $age, $motFavoie)
    {
        parent::__construct($nom, $age);
        $this->motFavoie = $motFavoie;
    }

    public function parler()
    {
        echo "\nje suis $this->nom : Coco $this->motFavoie";
    }
}