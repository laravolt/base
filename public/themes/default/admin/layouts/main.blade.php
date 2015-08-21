@extends('layouts.base')

@section('body')

    @include('admin.menus.topbar')

    <div class="ui container">
        <div class="ui grid" style="margin-top: 20px">
            <div class="sixteen wide column">
                {!! Breadcrumbs::renderIfExists() !!}
            </div>
            <div class="twelve wide column" style="padding-top: 0px">
                @include('elements.flash')
                @yield('content')
            </div>
            <div class="four wide column" style="padding-top: 0px">
                @yield('sidemenu')
            </div>
        </div>
    </div>

    @include('admin.elements.footer')
@endsection
