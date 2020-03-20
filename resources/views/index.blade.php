<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Nunito" rel="stylesheet">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        <header>
            <nav class="uk-container uk-navbar-transparent uk-margin" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">Seed.<span>Life</span></a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li><a href="#">About</a></li>
                        <li><a href="{{ url('/') }}#thoughts">Thoughts</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div class="hero uk-container" uk-scrollspy="cls:uk-animation-fade; repeat: true">
                <div class="hero-content uk-width-2-3@m uk-width-1-1">
                    <h1 class="hw-text-bold uk-margin-large-top uk-margin-remove-top@m">
                        “Your Mind is a Garden,
                            Your Thoughts are the Seeds.
                            You can grow Flowers
                            or weeds...” 
                    </h1>
                    <p class="uk-text-lead">– OSHO</p>
                </div>
                <ul class="uk-iconnav uk-iconnav-vertical uk-position-center-right uk-margin-large-right uk-visible@m social-icons">
                    <li class="uk-animation-toggle">
                        <a href="#" class="uk-animation-scale-up" uk-icon="icon: instagram; ratio: 1.6"></a>
                    </li>
                    <li class="uk-animation-toggle">
                        <a href="https://twitter.com/Mandl_P" class="uk-animation-scale-up" uk-icon="icon: twitter; ratio: 1.6" target="_blank"></a>
                    </li>
                    <li class="uk-animation-toggle">
                        <a href="https://www.linkedin.com/in/paul-mandele/" class="uk-animation-scale-up" uk-icon="icon: linkedin; ratio: 1.6" target="_blank"></a>
                    </li>
                    <li class="uk-animation-toggle">
                        <a href="https://www.facebook.com/paul.alanpaul" class="uk-animation-scale-up" uk-icon="icon: facebook; ratio: 1.6" target="_blank"></a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="uk-section">
            <div id="thoughts" class="uk-container wrapper">
                @foreach ($posts as $post)
                    <div  uk-scrollspy-class="uk-animation-slide-bottom" class="uk-margin-large-bottom post-excerpt">
                        <div class="uk-text-small"><img class="uk-border-circle uk-margin-right" src="{{ $post->author->avatar }}" width = "30" height = "30" alt="{{ $post->author->name }} avatar">  By <b>&nbsp;&nbsp; {{ $post->author->name }} </b>, <b>&nbsp; {{ $post->publish_date->diffForHumans() }}</b></div>
                        <h2><a href="{{ url($post->slug) }}">{{ $post->title }}</a></h2>
                        <p>{{ $post->excerpt }}</p>
                        <p class="uk-animation-toggle" tabindex="0"><a href="{{ url($post->slug) }}">Read more <span class="uk-animation-slide-left" uk-icon="icon: arrow-right;"></span></a></p>
                    </div>
                @endforeach
            </div>
        </div>        

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit-icons.min.js"></script>
    </body>
</html>

