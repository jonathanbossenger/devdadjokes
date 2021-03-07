<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;
use App\Http\Services\JokeService;

class JokeController extends Controller
{
    protected $jokeService;

    public function __construct(JokeService $jokeService)
    {
        $this->jokeService = $jokeService;
    }

    /**
     * Display a joke.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewData = $this->jokeService->fetchJoke();
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
