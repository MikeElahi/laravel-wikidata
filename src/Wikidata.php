<?php

namespace WiGeeky\Wikidata;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class Wikidata
{
    protected static $DEFAULT_BASE_URL = "https://query.wikidata.org/sparql?query=";
    
    public static function getBaseUrl(): string
    {
        return config('wikidata.base_url', self::$DEFAULT_BASE_URL);   
    }

    public function executeRaw(string $query): ?array
    {
        return Http::acceptJson()->get($this->getBaseUrl() . urlencode($query))->json();
    }

    public function flatten(array $queryResult)
    {
        $flattenedResult = [];
        foreach($queryResult['results']['bindings'] as $binding){
            $result = [];
            foreach($binding as $key => $values){
                $result[$key] = $values['value'];
            }
            $flattenedResult[] = $result;
        }
        return $flattenedResult;
    }

    public function get(string $query): Collection
    {
        return collect(
            $this->flatten($this->executeRaw($query))
        );   
    }
}
