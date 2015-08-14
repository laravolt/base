@extends('layouts.base')

@section('body')
    @include('frontend.elements.header')

    <div id="main-content" style="margin: 55px 0; min-height: 400px">

        @include('elements.flash')

        @yield('content')
    </div>

    @include('frontend.elements.footer')
@endsection
