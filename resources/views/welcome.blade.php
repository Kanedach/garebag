@extends('layouts.app')
@section('content')

    <table class="ui striped very compact table">
        <thead>
        <tr><th>Gewicht in Kilogram</th>
            <th>Datum</th>
            <th>Partei</th>
        </tr></thead>
        <tbody>
        @foreach($garbages as $garbage)
            <tr>
                <td data-label="Gewicht">{{ $garbage->weight/1000 }}Kg</td>
                <td data-label="Datum">{{ date('d. M. Y', strtotime($garbage->date))}}</td>
                <td data-label="Partei">{{$garbage->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
