<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Dev Dad Jokes</title>
    </head>
    <body>
        <div id="main">
            <div class="two-col">
                <div class="first-col">
                    <div id="window" class="win-theme">
                        <div id="wd-title">
                            <div id="wd-app-name">
                                <img class="wd-icon" id="wd-icon" alt="app icon">
                                <span>DevDadJokes</span>
                            </div>
                            <div class="wd-buttons" id="wd-buttons">
                                <img alt="minimize-icon">
                                <img alt="maximize-icon">
                                <img alt="close-icon">
                            </div>
                        </div>
                        <div id="wd-content">
                            @if($joke)
                                <span id="wd-setup">{{$joke['setup']}}</span>
                                <span id="wd-delivery">{{$joke['delivery']}}</span>
                            @else
                                <span id="wd-setup">Whoops, looks like the API has hit it's limit, please try again later!</span>
                            @endif
                            <span id="wd-tags">
                                <span>#DevDadJokes</span><span>devdadjokes.net</span>
                            </span>
                        </div>
                        <div id="theme-modal">
                            <div class="theme-option" id="win">Windows</div>
                            <div class="theme-option" id="mac">macOS</div>
                            <div class="theme-option" id="ubuntu">Ubuntu</div>
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <button id="theme-btn" class="btn mr-5">
                            change theme
                        </button>
                        {{--<button id="submit-btn" class="btn mr-5">
                            submit joke
                        </button>--}}
                        <button id="share-btn" class="btn">
                            share
                        </button>
                    </div>
                </div>
            </div>
            <div class="second-col">
                <div id="site-desc" class="site-desc">
                    <h1>DevDadJokes</h1>
                    <h2>Credits</h2>
                    <ol>
                        <li>
                            <a href="https://github.com/jonathanbossenger" target="_blank">
                                Jonathan Bossenger
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/szhabolcs" target="_blank">
                                Nagy Szabolcs
                            </a>
                        </li>
                    </ol>
                    <h2>Built with</h2>
                    <ol>
                        <li>
                            <a href="https://laravel.com/" target="_blank">
                                Laravel
                            </a>
                        </li>
                        <li>
                            <a href="https://tailwindcss.com/" target="_blank">
                                TailwindCSS
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/Sv443/JokeAPI" target="_blank">
                                Joke API
                            </a>
                        </li>
                    </ol>
                    <div>
                        <div>
                            <img src="img/github-icon.svg" alt="github icon"><a href="https://github.com/jonathanbossenger/devdadjokes" target="_blank" rel="noopener noreferrer">devdadjokes</a>
                        </div>
                        <div>
                            <img src="img/dev-icon.svg" alt="dev icon"><a href="https://dev.to/jonathanbossenger/dev-dad-jokes-my-submission-to-the-digitalocean-app-platform-hackathon-140i" target="_blank" rel="noopener noreferrer">DOHackathon submission</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
