<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class JokeController extends Controller
{
    protected $guzzleClient;
    protected $jokeApiRequest;

    public function __construct(Client $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
        $this->jokeApiRequest = 'https://v2.jokeapi.dev/joke/Programming?blacklistFlags=nsfw,religious,political,racist,sexist,explicit&type=twopart';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = $this->guzzleClient->get($this->jokeApiRequest);
        $jokeArray = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);

        if (isset($jokeArray['error']) && $jokeArray['error'] !== true) {
            $joke = Joke::firstOrCreate([
                'joke_id' => $jokeArray['id'],
                'setup' => $jokeArray['setup'],
                'delivery' => $jokeArray['delivery'],
            ]);
            $viewData = compact('jokeArray');
        } else {
            $viewData = ['jokeArray' => false];
        }
        return view('home', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function show(Joke $joke)
    {
        return view(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function edit(Joke $joke)
    {
        return view(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joke $joke)
    {
        return view(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joke  $joke
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joke $joke)
    {
        return view(404);
    }
}
