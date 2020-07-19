@extends('layouts.app')

@section('content')
    <h2 class="ui header">
        Abfall vom Datum {{date('d. M. Y', strtotime($garbage->date))}}
    </h2>
    <table class="ui striped very compact table">
        <thead>
        <tr><th>Attribut</th>
            <th>Wert</th>
        </tr></thead>
        <tbody>
            <tr>
                <td data-label="Value">Gewicht</td>
                <td data-label="Key">{{ $garbage->weight/1000 }} kg.</td>
            </tr>
            <tr>
                <td data-label="Value">Abfall Datum</td>
                <td data-label="Key">{{ date('d. M. Y', strtotime($garbage->date))}}</td>
            </tr>
            <tr>
                <td data-label="Value">Garbage ID</td>
                <td data-label="Key">{{ $garbage->id }}</td>
            </tr>
            <tr>
                <td data-label="Value">Partei ID</td>
                <td data-label="Key"><a href="{{route('tenant.show', $garbage->tenant_id)}}">{{ $garbage->tenant_id }}</a></td>
            </tr>
            <tr>
                <td data-label="Value">Erstellt</td>
                <td data-label="Key">{{ date('d. M. Y', strtotime($garbage->created_at))}}</td>
            </tr>
            <tr>
                <td data-label="Value">Angepasst</td>
                <td data-label="Key">{{ date('d. M. Y', strtotime($garbage->updated_at))}}</td>
            </tr>
        </tbody>
    </table>
    <div class="sixteen wide column" style="margin-bottom: 15px">
        <div class="column">
            <a class="fluid ui red button" href="{{route('garbage.destroy', $garbage->id)}}">Löschen</a>
        </div>
    </div>
    <div class="sixteen wide column">
        <div class="column">
            <a class="fluid ui grey button" href="{{route('tenant.show', $garbage->tenant_id)}}">Zurück</a>
        </div>
    </div>
@endsection
