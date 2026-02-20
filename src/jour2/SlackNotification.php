<?php

namespace App\jour2;

class SlackNotification implements Notifiablee
{

    public function envoyer(string $message)
    {
        echo "Bonjour nous avant envoyer un slack avec un message :  $message";

    }
}