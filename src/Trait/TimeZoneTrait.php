<?php

namespace App\Trait;

trait TimeZoneTrait
{
    protected function changeTimeZone($TimeZoneId): void
    {
        date_default_timezone_set($TimeZoneId);
    }
}
