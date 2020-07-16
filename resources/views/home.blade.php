@extends('layouts.app')

@section('content')
    <h2 class="ui header">
        Dashboard
        <div class="sub header">This section is only for logged in Users</div>
    </h2>
    <div class="ui three stackable cards">
        <div class="ui blue card">
            <div class="content">
                <div class="center aligned header">Tenants</div>
                <div class="center aligned description">
                    <div class="ui relaxed divided list">
                        @foreach($tenants as $tenant)
                            <div class="item">
                                <div class="item">
                                    <div class="content">
                                        <a class="header" href="{{route('tenant.show', $tenant->id)}}">{{$tenant->name}}</a>
                                        <div class="description">Created at {{date('d. M. Y', strtotime($tenant->created_at))}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="extra content">
                <div class="center aligned author">
                    <a class="ui fluid button" href="{{route('tenant.create')}}">Create</a>
                </div>
            </div>
        </div>

        <div class="ui green card">
            <div class="content">
                <div class="center aligned header">Garbage</div>
                <div class="center aligned description">
                    <div class="ui middle aligned divided list">

                    </div>
                </div>
            </div>
            <div class="extra content">
                <div class="center aligned author">
                    <a class="ui fluid button" href="{{route('garbage.create')}}">Create</a>
                </div>
            </div>
        </div>
    </div>
@endsection
