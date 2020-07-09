@extends('layouts.app')

@section('content')
    <h2 class="ui center aligned header">
        <div class="content">
            Login
            <div class="sub header">Garbage List</div>
        </div>
    </h2>
    <form method="POST" action="{{ route('login') }}">
        @method('POST')
        @csrf
        <div class="ui grid">
            <div class="sixteen wide column">
                <div class="column">
                    <div class="ui labeled fluid input focus">
                        <input type="email" placeholder="E-Mail" name="email" id="email" required>
                    </div>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="column">
                    <div class="ui fluid input">
                        <input type="password" name="password" id="password" required>
                    </div>
                </div>
            </div>
            <div class="sixteen wide column">
                <div class="column">
                    <div class="ui checkbox">
                        <input type="checkbox">
                        <label>Remember Me</label>
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
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </form>
@endsection
