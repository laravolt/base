@extends('layouts.frontend')

@section('content')
    <h2>Latest Post</h2>
    @foreach($posts as $post)
        <div><a href="{{ $post['permalink'] }}">{{ $post['title'] }}</a></div>
    @endforeach
@endsection
