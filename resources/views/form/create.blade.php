@extends('layouts.app')
@section('content')
    <h2 class="ui center aligned header">
        <div class="content">
            Abfallerfassung
            <div class="sub header">Tipp: Recycling statt Wegwerfen.</div>
        </div>
    </h2>
    <form method="post" action="{{route('garbage.create')}}">
        @method('POST')
        @csrf
        <div class="ui grid">
            <div class="sixteen wide column">
                <div class="column">
                    <div class="ui right labeled fluid input focus">
                        <input type="number" placeholder="Gewicht in Gramm" name="weight" id="weight" required>
                        <div class="ui basic label">
                            g
                        </div>
                    </div>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="column">
                    <div class="ui fluid input">
                        <input type="date" value="{{date('Y-m-d', strtotime(now()))}}" name="date" id="date" required>
                    </div>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="column">
                   <input type="text" name="tenant" value="{{$id}}" hidden>
                    @error('tenant')
                    <div class="alert alert-danger">ID Missing</div>
                    @enderror
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="column">
                    <button class="fluid ui primary button" type="submit">Erfassen</button>
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
