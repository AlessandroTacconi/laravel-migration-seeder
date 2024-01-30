<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
<h1>I treni di oggi</h1>
<div>
    <div class="row">
    @foreach ($trains as $train)
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $train['company'] }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary d-flex">
                <div>{{ $train['departure_station'] }} -</div>
                <div> {{ $train['arrival_station'] }}</div>
            </h6>
            <p class="card-text">Il giorno {{ $train['departure_date'] }}</p>
            <p class="card-text">Dalle {{ $train['departure_time'] }}</p>
            <p class="card-text">Alle {{ $train['arrival_time'] }}</p>

        </div>
    </div>
    </div>
    @endforeach
    </div>
</div>

</body>

</html>
