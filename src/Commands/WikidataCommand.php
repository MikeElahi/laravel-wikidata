<?php

namespace WiGeeky\Wikidata\Commands;

use Illuminate\Console\Command;

class WikidataCommand extends Command
{
    public $signature = 'laravel-wikidata';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
