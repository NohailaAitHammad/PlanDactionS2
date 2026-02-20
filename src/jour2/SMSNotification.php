<?php

namespace App\jour2;

class SMSNotification implements Notifiablee
{

    public function envoyer(string $message)
    {
        echo "Bonjour nous avant envoyer un sms avec un message :  $message";

    }
}