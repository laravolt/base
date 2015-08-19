@extends('layouts.base')

@section('body')

    @include('admin.menus.topbar')

    <div class="ui container">
        <div class="ui grid" style="margin-top: 38px">
            <div class="four wide column" style="padding-top: 20px">
                @yield('sidemenu')
            </div>
            <div class="twelve wide column" style="padding-top: 20px">
                @include('elements.flash')
                @yield('content')
            </div>
        </div>
    </div>

    @include('admin.elements.footer')
@endsection
