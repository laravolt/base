<div class="ui attached menu inverted stackable borderless">
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
            @if(auth()->check())
                <div class="ui pointing dropdown item">
                    <a href="">
                        {{ auth()->user()->name }} <i class="dropdown icon"></i>
                    </a>
                    <div class="menu small">
                        <a href="{{ auth()->user()->permalink }}" class="item">Your Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <div class="divider"></div>
                        <a href="{{ route('my.profile.index') }}" class="item">Settings</a>
                        <a href="{{ url('auth/logout') }}" class="item">Logout</a>
                    </div>
                </div>
            @else
                <div class="item">
                    <div class="ui buttons small">
                        <a href="{{ url('auth/login') }}" class="ui button violet">Login</a>
                        <a href="{{ url('auth/register') }}" class="ui button purple">Daftar</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
