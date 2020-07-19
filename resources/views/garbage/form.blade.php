@extends('layouts.app')
@section('content')
    <h2 class="ui center aligned header">
        <div class="content">
            {{ $edit == 0 ? 'Abfallerfassung' : 'Abfallbearbeitung' }}
            <div class="sub header">Tipp: Recycling statt Wegwerfen.</div>
        </div>
    </h2>
    <form method="post" action="{{$edit == 0 ? route('garbage.create') : route('garbage.edit', $id) }}">
        @method('POST')
        @csrf
        <div class="ui grid">
            <div class="sixteen wide column">
                <div class="column">
                    <div class="ui right labeled fluid input focus">
                        <input type="number" placeholder="Gewicht in Gramm" value="{{old('weight') ? old('weight'): $weight}}" name="weight" id="weight" required>
                        <div class="ui basic label">
                            g
                        </div>
                    </div>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="column">
                    <div class="ui fluid input">
                        <input type="date" value="{{old('date') ? old('date'): $date}}" name="date" id="date" required>
                    </div>
                </div>
            </div>
            <div class="sixteen wide column">
                @if(isset($id))
                    <div class="column">
                        <div class="ui labeled fluid input disabled">
                            <input type="text" name="tenant" value="{{$id}}">
                        </div>
                        @error('tenant')
                        <div class="alert alert-danger">ID Missing</div>
                        @enderror
                    </div>
                @else
                    <div class="ui selection dropdown fluid">
                        <input type="hidden" name="tenant">
                        <i class="dropdown icon"></i>
                        <div class="default text">Partei</div>
                        <div class="menu">
                            @foreach($tenants as $tenant)
                                <div class="item" data-value="{{$tenant->id}}">{{$tenant->name}}</div>
                            @endforeach
                        </div>
                    </div>
                @endif
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
