<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <title>Garbage List</title>
</head>
<body>
<h1>
    Müllliste gedruckt am  {{ date('d.m.Y', strtotime(now())) }}
</h1>
<table class="ui striped very compact table">
    <thead>
    <tr>
        <th>Gewicht in Kilogram</th>
        <th>Datum</th>
        <th>Partei</th>
    </tr>
    </thead>
    <tbody>
    @foreach($garbages as $garbage)
        <tr>
            <td data-label="Gewicht">{{ $garbage->weight/1000 }} kg</td>
            <td data-label="Datum">{{ date('d. M. Y', strtotime($garbage->date))}}</td>
            <td data-label="Partei">{{$garbage->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
