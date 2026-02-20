<?php

namespace App\jour1;

class Garage
{
    public static int $nbGarage = 0;
    private array  $voiture = [];

    public function __construct(array $voiture)
    {
        $this->voiture = $voiture;
        self::$nbGarage = count($this->voiture);
    }

    public function ajouterVoiture(string $voiture) : bool
    {
        $this->voiture[] = $voiture;
        static::$nbGarage = count($this->voiture);
        return true;
    }

    public function retirerVoiture($key)
    {
        if(array_key_exists($key, $this->voiture)){
            array_splice($this->voiture, $key, 1);
            return true;
        }else{
            return false;
        }
    }

    public function listerVoiture() : void
    {
        echo $this->getNbGaratges();
        echo "\n";
        foreach ($this->voiture as $key => $voiture) {
            echo "\n N°$key :  $voiture";
        }
    }

    public function getNbGaratges()
    {
        //return static::$nbGarage;
        return self::$nbGarage;
    }
}

