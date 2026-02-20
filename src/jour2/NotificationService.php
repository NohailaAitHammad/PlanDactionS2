<?php

namespace App\jour2;

class NotificationService implements Notifiablee
{
    private Notifiablee  $notificationsStrategy;

    public function __construct(Notifiablee  $notifiablee)
    {
        $this->notificationsStrategy = $notifiablee;
    }

    public function envoyerNotificationParType(string $message)
    {

    }

    public function envoyer(string $message)
    {
        return $this->notificationsStrategy->envoyer($message);
    }
}