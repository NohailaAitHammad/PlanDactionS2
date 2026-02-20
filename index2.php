<?php

require_once __DIR__ . '/vendor/autoload.php';

$animaux = [new \App\jour2\Chien("Rex", 3), new \App\jour2\Chat("Minou", 5), new \App\jour2\Perroquet("coco", 10, "Coucou")];
foreach ($animaux as $a){
    $a->parler() .  PHP_EOL;
}