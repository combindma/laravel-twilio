<?php

namespace Combindma\Twilio;

use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Api\V2010\Account\MessageInstance;
use Twilio\Rest\Client;

class Twilio
{
    private ?string $sid;

    private ?string $token;

    private ?string $from;

    private ?string $whatsapp;

    private bool $enabled;

    public function __construct()
    {
        $this->enabled = config('twilio.enabled');
        $this->sid = config('twilio.sid');
        $this->token = config('twilio.token');
        $this->from = config('twilio.from');
        $this->whatsapp = config('twilio.whatsapp');
    }

    public function sid(): ?string
    {
        return $this->sid;
    }

    public function from(): ?string
    {
        return $this->from;
    }

    public function fromWhatsapp(): ?string
    {
        return $this->whatsapp;
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
     *
     * @throws ConfigurationException|TwilioException
     */
    public function message(string $recipient, string $message): ?MessageInstance
    {
        if (! $this->isEnabled()) {
            return null;
        }

        $client = new Client($this->sid(), $this->token());

        return $client->messages->create($recipient, ['from' => $this->from(), 'body' => $message]);
    }

    /**
     * Send a Message with a Messaging Service
     *
     * @see https://www.twilio.com/docs/messaging/services#code-send-a-message-with-a-messaging-service Documentation
     *
     * @throws ConfigurationException|TwilioException
     */
    public function messageWithService(string $recipient, string $message, string $serviceId): ?MessageInstance
    {
        if (! $this->isEnabled()) {
            return null;
        }

        $client = new Client($this->sid(), $this->token());

        return $client->messages->create($recipient, ['messagingServiceSid' => $serviceId, 'body' => $message]);
    }

    /**
     * Send a message with WhatsApp
     *
     * @see https://www.twilio.com/docs/whatsapp/quickstart/php#code-send-a-message-with-whatsapp-and-php Documentation
     *
     * @throws ConfigurationException|TwilioException
     */
    public function whatsapp(string $recipient, string $message): ?MessageInstance
    {
        if (! $this->isEnabled()) {
            return null;
        }

        $client = new Client($this->sid(), $this->token());

        return $client->messages->create('whatsapp:'.$recipient, [
            'from' => 'whatsapp:'.$this->fromWhatsapp(),
            'body' => $message,
        ]);
    }

    /**
     * Send a WhatsApp message using a template
     *
     * @see https://www.twilio.com/docs/whatsapp/tutorial/send-whatsapp-notification-messages-templates#code-send-a-whatsapp-message-using-a-message-template Documentation
     *
     * @throws ConfigurationException|TwilioException
     */
    public function whatsappWithTemplate(string $recipient, string $serviceId, string $templateId, array $content): ?MessageInstance
    {
        if (! $this->isEnabled()) {
            return null;
        }

        $client = new Client($this->sid(), $this->token());

        return $client->messages->create('whatsapp:'.$recipient, [
            'contentSid' => $templateId,
            'from' => 'whatsapp:'.$this->fromWhatsapp(),
            'contentVariables' => json_encode($content),
            'messagingServiceSid' => $serviceId,
        ]);
    }
}
