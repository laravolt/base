<div class="ui fixed menu top">
    <div class="ui container">
        <div href="#" class="header item">
            <img class="logo" src="{{ theme_asset('img/logo-laravolt.png') }}">
            &nbsp;
            &nbsp;
            <a href="{{url('/')}}">LARAVOLT</a>
        </div>

        <a href="#" class="item">Konten 1</a>
        <a href="#" class="item">Konten 2</a>

        <div class="menu right">
            @if(Auth::check())
                <div class="item">
                    <a href="{{ route('backend.content.create') }}" class="ui button teal">UPLOAD</a>
                </div>
                <a href="{{ route('backend.profile.edit', ['id' => 'me']) }}" class="item">
                    <img src="{{ Auth::user()->avatar_url }}" class="ui avatar avatar-me image" alt=""/>
                </a>
                <a href="{{ route('backend.message.index') }}" class="item">
                    <i class="mail outline icon"></i>
                    @if($message_count != 0)
                        <div class="ui red label">{{ $message_count }}</div>
                    @endif
                </a>
                <a href="{{ url('auth/logout') }}" class="item">Logout</a>
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
