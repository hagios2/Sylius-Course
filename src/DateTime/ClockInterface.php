<?php

namespace App\DateTime;

interface ClockInterface
{
    public function isNight(): bool;
}
