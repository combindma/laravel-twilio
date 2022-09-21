<?php

namespace Combindma\Twilio;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TwilioServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-twilio')->hasConfigFile();
    }

    public function packageRegistered()
    {
        $this->app->singleton(Twilio::class, function () {
            return new Twilio();
        });

        $this->app->bind(TwilioContract::class, Twilio::class);
    }
}
