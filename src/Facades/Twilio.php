<?php

namespace Combindma\Twilio\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Combindma\Twilio\Twilio
 */
class Twilio extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Combindma\Twilio\Twilio::class;
    }
}
