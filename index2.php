<?php

use App\jour2\Client;

require_once __DIR__ . '/vendor/autoload.php';

$animaux = [new \App\jour2\Chien("Rex", 3), new \App\jour2\Chat("Minou", 5), new \App\jour2\Perroquet("coco", 10, "Coucou")];
foreach ($animaux as $a){
    $a->parler() .  PHP_EOL;
}

/* exercice 2 */
$client = new Client();
$client->payer();
$client->rembourser();
$client->envoyerNotification();

/* exercice 3 */
echo "\n*********\n";

$notification1 = new \App\jour2\NotificationService(new \App\jour2\EmailNotification());
$notification2 = new \App\jour2\NotificationService( new \App\jour2\SMSNotification());
$notification3 = new \App\jour2\NotificationService(new \App\jour2\SlackNotification());
$notification1->envoyer("notification envoyer avec success\n");
$notification2->envoyer("notification envoyer avec success\n");
$notification3->envoyer("notification envoyer avec success\n");
/*
 * Le Pattern Strategy te permet de séparer la logique d'action du
 * reste du code, pour que tu puisses facilement changer ou remplacer
 * cette logique sans avoir à modifier tout ton programme. Si tu as
 * plusieurs façons d’exécuter une action, c’est ici que ce pattern
 * devient très utile. Plutôt que d'avoir un gros bloc conditionnel,
 * tu délègues le comportement à un objet spécifique.*/