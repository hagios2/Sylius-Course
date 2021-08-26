<?php

namespace App\DateTime;

class Clock implements ClockInterface
{
    public function isNight(): bool
    {
        $current_time = (new \DateTime())->format('H');

        return $current_time > 19 || $current_time < 6;
    }
}
