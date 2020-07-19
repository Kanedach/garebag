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
    <div class="ui grid" style="margin-bottom: 15px">
        <div class="row">
            <div class="six wide column">
                <a class="ui primary fluid button" href="{{route('garbage.edit', $garbage->id)}}">Bearbeiten</a>
            </div>
            <div class="four wide column">
                <button class="ui red fluid button" onclick="$('.ui.modal').modal('setting', 'closable', false).modal('show');">Löschen</button>
            </div>
            <div class="six wide column">
                <a class="ui grey fluid button" href="{{route('tenant.show', $garbage->tenant_id)}}">Zurück</a>
            </div>
        </div>
    </div>

    <div class="ui modal">
        <div class="header">
            Mülleintrag löschen
        </div>
        <div class="image content">
            <div class="description">
                Möchtest du den Mülleintrag unwiederuflich löschen?
            </div>
        </div>
        <div class="actions">
            <button onclick="$('.ui.modal').modal('hide');" class="ui primary button">Nein</button>
            <a class="ui red button" href="{{route('garbage.delete', $garbage->id)}}">Ja</a>
        </div>
    </div>

@endsection
