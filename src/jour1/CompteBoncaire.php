<?php
namespace App\jour1;
class CompteBoncaire
{
    private string $titulaire;
    private float $solde;

    public function __construct(string $titulaire, float $soldeInitiale = 0)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitiale;
    }

    public function deposer(float $montant) : void
    {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    public function retirer(float $montant) :bool
    {
        if($this->solde < $montant) {
            return false;
        }
        $this->solde -= $montant;
        return true;
    }

    public function getSolde() : float
    {
        return $this->solde;
    }

    public function afficherSolde() : string
    {
        return " Compte de $this->titulaire : $this->solde £";
    }
}