<!DOCTYPE html>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162950092-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162950092-1');
</script>

    <title>{{ $post->title }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Nunito" rel="stylesheet">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/css/uikit.min.css" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        @include('partials.nav')
        <div class="post-header" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ $post->featured_image }}) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; width: 100%; height: 55vh;">
            <div class="wrapper flex-post-title uk-light">
                <h2>{{ $post->title }}</h2> 
                <div class="uk-margin-bottom"><img class="uk-border-circle uk-margin-right" src="{{ $post->author->avatar }}" width = "40" height = "40" alt="{{ $post->author->name }} avatar">  By <b>&nbsp; {{ $post->author->name }}</b>, <b>&nbsp; {{ $post->publish_date->diffForHumans() }}</b>
                    <span class="uk-align-right">{{ read_time(['content' => (string)$post, 'abbreviated' => true]) }}</span>
                     {{-- | <span>{{ $counts }} views</span> --}}
                </div>
            </div>
        </div>
        <div class="uk-section">
            <div class="uk-container wrapper">
                {!! $post->body !!}
                <div class="uk-margin-large-top">
                    <div id="disqus_thread"></div>
                </div>
            </div>
        </div>        

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.6/dist/js/uikit-icons.min.js"></script>
    </body>
</html>

