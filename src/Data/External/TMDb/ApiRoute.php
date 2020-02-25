<?php


namespace App\Data\Resources;


final class ApiRoute
{
    private string $BASE_URL;
    const KEY_LOCATION = 'MOVIEDB_API_KEY';

    private string $endpoint;
    private string $queryParams;

    final public function __construct(string $endpoint, string $queryParams)
    {
        $this->BASE_URL = $_ENV['MOVIEDB_URL'];
        $this->endpoint = $endpoint;
        $this->queryParams = $queryParams;
    }

    final private function getApiKey(): string
    {
        return '?api_key=' . $_ENV[ApiRoute::KEY_LOCATION] ?? '';
    }

    public function getURL(): string
    {
        return $this->BASE_URL
            . $this->endpoint
            . $this->getApiKey()
            . $this->queryParams;
    }
}
