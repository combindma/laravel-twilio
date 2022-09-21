<?php

namespace Combindma\Twilio;

use Twilio\Rest\Api\V2010\Account\MessageInstance;

interface TwilioContract
{
    public function message(string $recipient, string $message): ?MessageInstance;
}
