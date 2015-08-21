@extends('layouts.base')

@section('body')
    @include('frontend.elements.header')

    <div id="main-content">
        @include('elements.flash')

        @yield('content')
    </div>

    @include('frontend.elements.footer')
@endsection
