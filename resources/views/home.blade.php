<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Migration Seeder</title>
        @vite('resources/js/app.js')
    </head>
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
    <body class="p-3">
        <h1 class="text-center mb-3 text-danger bold">Trains</h1>
        <table class="table table-striped bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Company</th>
                    <th>Departure Station</th>
                    <th>Arrival Station</th>
                    <th>Departure Time</th>
                    <th>Arrival Date</th>
                    <th>Train Code</th>
                    <th>Carriages</th>
                    <th>In Time</th>
                    <th>Deleted</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_date }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->carriages }}</td>
                        <td>{{ $train->in_time ? 'Yes' : 'No' }}</td>
                        <td>{{ $train->deleted ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
