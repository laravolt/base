@extends('layouts.base')

@section('body')
    @include('frontend.elements.header')

    <div class="ui container" id="main-content" style="margin: 100px 0; min-height: 400px">

        @include('elements.flash')

        @yield('content')
    </div>

    @include('frontend.elements.footer')
@endsection
