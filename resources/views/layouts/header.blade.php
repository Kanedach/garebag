<div class="ui top menu">
    <a class="item" href="{{route('garbages')}}">Garbage List</a>
    <a class="item" href="{{route('garbage.print')}}">Drucken</a>
    @if(Auth::user())
        <a class="item" href="{{route('home')}}">Home</a>
        <div class="right menu">
            <a class="item" href="{{route('logout')}}">Logout</a>
        </div>
    @endif
</div>
