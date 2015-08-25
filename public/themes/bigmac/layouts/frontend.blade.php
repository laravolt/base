@extends('layouts.base')

@section('body')
    <div id="frontend">
        <header class="ui menu attached one item" id="header">
            <div class="item"><img src="{{ theme_asset('img/logo-mcd.png') }}" alt=""></div>
        </header>
        <div class="ui menu attached four item small borderless" id="topmenu">
            <a href="{{ route('frontend.home') }}" class="item {{ (Request::path() == '/')?'active':'' }}">
            <span class="circular ui icon button">
                <i class="icon home"></i>
            </span>
                &nbsp;
                HOME
            </a>
            <a href="{{ route('frontend.gallery') }}" class="item {{ (Request::path() == 'galeri')?'active':'' }}">
            <span class="circular ui icon button">
                <i class="icon file image outline"></i>
            </span>
                &nbsp;
                GALERI
            </a>
            <a href="{{ route('frontend.mechanism') }}" class="item {{ (Request::path() == 'mekanisme')?'active':'' }}">
            <span class="circular ui icon button">
                <i class="icon settings"></i>
            </span>
                &nbsp;
                MEKANISME
            </a>
            <a href="{{ route('frontend.prize') }}" class="item {{ (Request::path() == 'hadiah')?'active':'' }}">
            <span class="circular ui icon button">
                <i class="icon trophy"></i>
            </span>
                &nbsp;
                HADIAH
            </a>
        </div>

        <div style="min-height: 500px">
            @yield('content')
        </div>

        <footer id="footer" class="ui container center aligned">
            <div class="ui segment basic">
                Copyright &copy; 2015 @McDonalds Indonesia. All rights reserved.
            </div>
        </footer>
    </div>
@endsection
