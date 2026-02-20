<?php

namespace App\jour2;

class EmailNotification implements Notifiablee
{
    public function envoyer(string $message)
    {
        echo "Bonjour nous avant envoyer un email avec un message :   $message";
    }
}