<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherApi
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    
    public function getParisData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.openweathermap.org/data/2.5/weather?q=Paris&units=metric&lang=fr&appid=5aa39d2b6e03143d284249f44d3b90b7'
        );
        return $response->toArray();
    }

}
