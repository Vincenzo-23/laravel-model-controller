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

<body class="bg-primary">

    <div class="container">
        <div class="row gy-5 p-5">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Title: {{ $movie->title }}</h4>
                            <h4 class="card-subtitle mb-4">Original Title: {{ $movie->original_title }}</h4>
                            <p class="card-text"><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                            <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>