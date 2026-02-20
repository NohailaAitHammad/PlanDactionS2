<?php

namespace App\jour1;

class VoitureElectrique extends Voiture
{
    private int $autonomieKm;

    public function __construct(string $modele, string $marque, int $kilometrage, int $autonomieKm)
    {
        parent::__construct($marque, $modele, $kilometrage);
        $this->autonomieKm = $autonomieKm;
    }

    public function decrire() : string
    {
        return "\n $this->modele $this->marque - $this->kilometrage Km | Électrique | Autonomie :  $this->autonomieKm Km";

    }
}