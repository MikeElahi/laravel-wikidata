<?php

namespace WiGeeky\Wikidata\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WiGeeky\Wikidata\Wikidata
 */
class Wikidata extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \WiGeeky\Wikidata\Wikidata::class;
    }
}
