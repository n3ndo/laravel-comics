<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header')

    <main>
        <div class="top-main">
            <div class="jumbotron">
                <div class="container">
                    <h2>current series</h2>
                </div>
            </div>
            <div class="comics">
                <div class="container">
                    <div class="comics-container py-5">
                        @foreach ($comics as $comic)
                            <div class="comics-card">
                                <a href="#">
                                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="">
                                    <h3>{{ $comic['series'] }}</h3>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center py-4">
                <button class="btn btn-primary btn-lg text-uppercase">load more</button>
            </div>
        </div>
        <div class="bottom-main">
            <div class="container">
                <ul>
                    <li><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""><a href="#">digital comics</a></li>
                    <li><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt=""><a href="#">dc merchandise</a></li>
                    <li><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt=""><a href="#">subscriptions</a></li>
                    <li><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt=""><a href="#">comic shop locator</a></li>
                    <li><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt=""><a href="#">dc power visa</a></li>
                </ul>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>