@extends('layouts.frontend')

@section('content')
    <div id="page-gallery">
        <div class="title">
            <h2 class="ui header">Galeri <strong>#BIGMACforaBIGDAY</strong></h2>
        </div>
        <div class="ui container">
            <div class="ui equal width padded grid">
                @foreach(range(1, 4) as $item)
                    @foreach(range(1, 4) as $item)
                        <div class="eight wide mobile four wide tablet four wide computer column">
                            <img src="{{ theme_asset('img/meme.png') }}" class="ui image fluid">
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
