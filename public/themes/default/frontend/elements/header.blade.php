<div class="ui fixed menu top">
    <div class="ui container">
        <div href="#" class="header item">
            <img class="logo" src="{{ theme_asset('img/logo-laravolt.png') }}">
            &nbsp;
            &nbsp;
            <a href="{{url('/')}}">LARAVOLT</a>
        </div>

        <a href="{{ route('posts.index') }}" class="item">Post</a>
        <a href="#" class="item">Konten 2</a>

        <div class="menu right">
            @if(Auth::check())
                <a href="#" class="item">
                    <img src="{{ auth()->user()->avatar_url }}" class="ui avatar avatar-me image" alt=""/>
                </a>
            @else
                <div class="item">
                    <div class="ui buttons">
                        <a href="{{ url('auth/login') }}" class="button basic ui grey">Login</a>
                        <a href="{{ url('auth/register') }}" class="ui button basic grey">Daftar</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
