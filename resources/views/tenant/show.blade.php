@extends('layouts.app')

@section('content')
    <h2 class="ui header">
        Partei: {{$tenant->name}}
        <div class="sub header">ID: {{$tenant->id}}</div>
        <div class="sub header">Created: {{date('d. M. Y', strtotime($tenant->created_at))}}</div>
        <div class="sub header">Updated: {{date('d. M. Y', strtotime($tenant->updated_at))}}</div>
    </h2>
    <table class="ui striped very compact table">
        <thead>
        <tr><th>Gewicht in Gram</th>
            <th>Datum</th>
            <th></th>
        </tr></thead>
        <tbody>
        @foreach($garbags as $garbage)
            <tr>
                <td data-label="Gewicht">{{ $garbage->weight }}g</td>
                <td data-label="Datum">{{ date('d. M. Y', strtotime($garbage->date))}}</td>
                <td class="right aligned"><a class="mini ui button" href="{{route('garbage.show', $garbage->id)}}">Detail</a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="sixteen wide column">
        <div class="column">
            <a class="fluid ui grey button" href="{{route('home')}}">Zurück</a>
        </div>
    </div>
@endsection
