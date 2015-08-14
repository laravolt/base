@extends('layouts.frontend')

@section('content')
    @if(auth()->check())
        <h2>welcome, {{ auth()->user()->name }}</h2>
    @else
        <h2>welcome, home</h2>
    @endif
@endsection
