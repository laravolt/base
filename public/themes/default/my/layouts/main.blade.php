@extends('layouts.base')

@section('body')
    @include('frontend.elements.header')
    <br>
    <br>

    <div id="main-content">
        @include('elements.flash')

        <div class="ui container">
            <div class="ui grid">
                <div class="column twelve wide">
                    <div class="ui top attached small menu">
                        @foreach (Menu::get('menus.my')->all() as $item)
                            <a href="{{ $item->url() }}" class="item {{ ($item->active)?'active':'' }}">{{ $item->title }}</a>
                        @endforeach
                    </div>
                    <div class="ui segment bottom attached very padded">
                        @yield('content')
                    </div>
                </div>
                <div class="column four wide">
                    <div class="ui card">
                        <div class="content">
                            <img class="right floated mini ui image" src="/images/avatar/large/elliot.jpg">

                            <div class="header">
                                {{ $user['name'] }}
                            </div>
                            <div class="meta">
                                Terdaftar 13 Juni 2015
                            </div>
                            <div class="description">
                                Elliot requested permission to view your contact details
                            </div>
                        </div>
                        <div class="extra content">
                            <a class="">Lihat Halaman Profil</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    @include('frontend.elements.footer')
@endsection
