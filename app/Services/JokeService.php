<?php

namespace App\Http\Services;

use App\Models\Joke;
use GuzzleHttp\Client;

class JokeService
{
    protected $guzzleClient;
    protected $jokeApi;

    public function __construct(Client $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
        $this->jokeApi = config('JOKE_API');
    }

    public function fetchJoke(){
        $response = $this->guzzleClient->get($this->jokeApiRequest);
        $joke = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);

        if (isset($joke['error']) && $joke['error'] !== true) {
            Joke::firstOrCreate([
                'joke_id' => $joke['id'],
                'setup' => $joke['setup'],
                'delivery' => $joke['delivery'],
            ]);
            return compact('joke');
        }

        return ['joke' => false];
    }

}
