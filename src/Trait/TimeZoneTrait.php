<?php

namespace App\Trait;

trait TimeZoneTrait
{
    protected function changeTimeZone(string $TimeZoneId): void
    {
        date_default_timezone_set($TimeZoneId);
    }
}
