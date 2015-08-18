@extends('layouts.base')

@section('body')

    <div class="ui container" style="margin-top: 50px;">
        <div class="ui grid">
            <div class="four wide column">
                @include('admin.elements.sidebar')
            </div>
            <div class="twelve wide column">
                @include('elements.flash')
                @yield('content')
            </div>
        </div>
    </div>

    @include('admin.elements.footer')
@endsection
