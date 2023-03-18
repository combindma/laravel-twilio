<?php

namespace Combindma\Twilio\Tests;

use Combindma\Twilio\Twilio;
use Combindma\Twilio\TwilioServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public Twilio $twilio;

    protected function getPackageProviders($app): array
    {
        return [
            TwilioServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('twilio.sid', 'twilio_sid');
        $app['config']->set('twilio.token', 'twilio_token');
        $app['config']->set('twilio.from', '0666666666');
        $app['config']->set('twilio.enabled', true);
        $this->twilio = new Twilio();
    }
}
