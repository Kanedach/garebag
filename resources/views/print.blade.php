<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }
        body{
            font-size: 12px;
        }
    </style>
    <title>Garbage List</title>
</head>
<body>
<h1>Apfallliste</h1>
<h4 class="lead">Gedruckt am {{ date('d.m.Y', strtotime(now())) }}</h4>
</div>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Gewicht in Kilogram</th>
        <th scope="col">Datum</th>
        <th scope="col">Partei</th>
    </tr>
    </thead>
    <tbody>
    @foreach($garbages as $garbage)
        <tr>
            <td>{{ $garbage->weight/1000 }} kg</td>
            <td>{{ date('d. M. Y', strtotime($garbage->date))}}</td>
            <td>{{$garbage->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
