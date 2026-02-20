<?php

require_once __DIR__ . '/vendor/autoload.php';
use App\jour1\CompteBoncaire;
/* exercice 1 */
$compte = new CompteBoncaire('Nohaila', 500.00);
echo $compte->afficherSolde();
$compte->deposer('200.0');
echo $compte->getSolde();
$result = $compte->retirer(1000.0);
var_dump($result);

/* exercice 2 */
$v1 = new \App\jour1\Voiture("Toyota", "Yarim", 15000);
echo $v1->decrire();
$v2 = new \App\jour1\VoitureElectrique("Tesla", "Model 3", 500, 400);
echo $v2->decrire();
/* exercice 3 */

$g1 = new \App\jour1\Garage( ["toyota", "Tesla"]);
$g1->ajouterVoiture("toyota");
$g1->ajouterVoiture("Tesla");
$g1->listerVoiture();
$g1->retirerVoiture(1);
$g1->retirerVoiture(0);
$g1->listerVoiture();
$g1->getNbGaratges();
echo "\n" . $g1->getNbGaratges(); // si static return 7
echo "\n" . $g1->getNbGaratges();// si self return 0
/*
 * static : fait reference a la classe reelement appele lors de l'execution
 * self : fait reference a la class dans laquel le code est cree independament de l'instance ou la classe
 */


