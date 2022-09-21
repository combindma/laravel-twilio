<?php

namespace Combindma\Twilio;

use Twilio\Rest\Client;

class Twilio
{
    protected ?string $sid;

    protected ?string $token;

    protected ?string $from;

    protected bool $enabled;

    public function __construct()
    {
        $this->enabled = config('twilio.enabled');
        $this->sid = config('twilio.sid');
        $this->token = config('twilio.token');
        $this->from = config('twilio.from');
    }

    public function sid(): ?string
    {
        return $this->sid;
    }

    public function from(): ?string
    {
        return $this->from;
    }

    public function token(): ?string
    {
        return $this->token;
    }

    public function isEnabled(): bool
    {
        return (bool) $this->enabled;
    }

    public function enable(): void
    {
        $this->enabled = true;
    }

    public function disable(): void
    {
        $this->enabled = false;
    }

    /**
     * Send sms using Twilio API
     *
     * @see https://www.twilio.com/docs/api/messaging/send-messages Documentation
     */
    public function message(string $recipient, string $message)
    {
        if (! $this->isEnabled()) {
            return null;
        }
        $client = new Client($this->sid(), $this->token());

        return $client->messages->create($recipient, ['body' => $message, 'from' => $this->from()]);
    }
}
