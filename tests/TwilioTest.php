<?php

it('can test if config file are set', function () {
    expect($this->twilio->sid())->toBe('twilio_sid')
        ->and($this->twilio->token())->toBe('twilio_token')
        ->and($this->twilio->from())->toBe('0666666666')
        ->and($this->twilio->isEnabled())->toBeTrue();
});
