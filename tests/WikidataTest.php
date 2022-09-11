<?php

use Illuminate\Support\Facades\Http;
use WiGeeky\Wikidata\Wikidata;
use WiGeeky\Wikidata\Tests\TestCase;

/**
 * @coversDefaultClass WiGeeky\Wikidata\Wikidata
 */
class WikidataTest extends TestCase
{
    /**
     * @test
     * @covers ::getBaseUrl
     */
    public function it_can_get_base_url(): void 
    {
        $this->assertIsString(Wikidata::getBaseUrl());
    }
}