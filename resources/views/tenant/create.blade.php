@extends('layouts.app')
@section('content')
    <h2 class="ui center aligned header">
        <div class="content">
            Partei Erfassung
            <div class="sub header">Erfasse die Partei möglichst Anonym wie das Beispiel EG oder OG 1</div>
        </div>
    </h2>
    <form method="post" action="{{route('tenant.create')}}">
        @method('POST')
        @csrf
        <div class="ui grid">
            <div class="sixteen wide column">
                <div class="column">
                    <div class="ui right labeled fluid input focus">
                        <input type="text" placeholder="Name" name="name" id="name" required>
                    </div>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="column">
                    <button class="fluid ui primary button" type="submit">Erfassen</button>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="column">
                    <a class="fluid ui grey button" href="{{route('logout')}}">Abbrechen</a>
                </div>
            </div>
        </div>
    </form>
    <script>
        $('.ui.dropdown')
            .dropdown()
        ;
    </script>
@endsection
