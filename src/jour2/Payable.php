<?php

namespace App\jour2;

interface Payable
{
    public function payer();
    public function rembourser();
}