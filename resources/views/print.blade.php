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
        .header,
        .footer {
            width: 100%;
            text-align: center;
            position: fixed;
        }
        .header {
            top: 0px;
        }
        .footer {
            bottom: 0px;
        }
        .pagenum:before {
            content: counter(page);
        }
    </style>
    <title>Garbage List</title>
</head>
<body>
<h1>Apfallliste</h1>
<p>Gedruckt am {{ date('d.m.Y', strtotime(now())) }} auf <a href="http://garbage-list.herokuapp.com/">http://garbage-list.herokuapp.com/</a></p>
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
<div class="footer">
    Seite <span class="pagenum"></span>
</div>
</body>
</html>
