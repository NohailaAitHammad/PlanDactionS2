<?php

namespace App\jour1;

class Voiture
{
    protected string $marque;
    protected string $modele;
    protected int $kilometrage;

    public function __construct(string $marque, string $modele, int $kilometrage)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
    }

    public function decrire() :string
    {
        return "\n $this->marque $this->modele  - $this->kilometrage Km";
    }
}