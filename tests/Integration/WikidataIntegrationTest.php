<?php

use Illuminate\Support\Collection;
use WiGeeky\Wikidata\Facades\Wikidata;
use WiGeeky\Wikidata\Tests\TestCase;


class WikidataIntegrationTest extends TestCase 
{
    private static $query = "SELECT ?country ?code ?flag WHERE {?item wdt:P31 wd:Q3624078 . ?item wdt:P474 ?code . ?item wdt:P297 ?country .  ?item wdt:P41 ?flag}";
    /**
     * @test
     */
    public function it_can_execute_raw_test_query()
    {
        $result = Wikidata::executeRaw(self::$query);
        $this->assertIsArray($result);
        $this->assertNotEmpty($result);
    }

    /**
     * @test
     */
    public function it_can_get_test_query()
    {
        $result = Wikidata::get(self::$query);
        $this->assertNotNull($result);
        $this->assertInstanceOf(Collection::class, $result);
    }
}