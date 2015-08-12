
@extends('layouts.frontend')

@section('content')
    <h2>{{ $post['title'] }}</h2>
    {!! Votee::render($post['id']) !!}
@endsection
