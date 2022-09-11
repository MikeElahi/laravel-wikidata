<?php

namespace WiGeeky\Wikidata\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array|null execute(string $query)
 * @see \WiGeeky\Wikidata\Wikidata
 */
class Wikidata extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \WiGeeky\Wikidata\Wikidata::class;
    }
}
