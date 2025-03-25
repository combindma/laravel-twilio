<?php

return [
    /*
    |--------------------------------------------------------------------------
    | SID
    |--------------------------------------------------------------------------
    |
    | Your Twilio Account SID #
    |
    */
    'sid' => env('TWILIO_SID', ''),

    /*
    |--------------------------------------------------------------------------
    | Access Token
    |--------------------------------------------------------------------------
    |
    | Access token that can be found in your Twilio dashboard
    |
    */
    'token' => env('TWILIO_AUTH_TOKEN', ''),

    /*
    |--------------------------------------------------------------------------
    | From Number
    |--------------------------------------------------------------------------
    |
    | The Phone number registered with Twilio that your SMS & Calls will come from
    |
    */
    'from' => env('TWILIO_NUMBER', ''),

    /*
    |--------------------------------------------------------------------------
    | Whatsapp Number
    |--------------------------------------------------------------------------
    |
    | The Phone number registered with Twilio that your Whatsapp Messages will come from
    |
    */
    'whatsapp' => env('TWILIO_WHATSAPP', ''),

    /*
   |--------------------------------------------------------------------------
   | Enable
   |--------------------------------------------------------------------------
   |
   | Enable or disable script rendering. Useful for local development.
   |
   */
    'enabled' => env('TWILIO_ENABLED', true),
];
