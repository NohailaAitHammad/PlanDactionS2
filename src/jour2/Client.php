<?php

namespace App\jour2;

class Client implements Payable, Notifiable
{

    public function envoyerNotification()
    {
        echo "\nEnvoyer une notification au client";
    }

    public function payer()
    {
        echo "\nle paiement a ete fait";
    }

    public function rembourser()
    {
        echo "\nle client a ete rembourser";
    }
}