<?php

namespace WiGeeky\Wikidata;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use WiGeeky\Wikidata\Commands\WikidataCommand;

class WikidataServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-wikidata')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-wikidata_table')
            ->hasCommand(WikidataCommand::class);
    }
}
