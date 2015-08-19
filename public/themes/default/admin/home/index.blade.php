@extends('admin.layouts.main')

@section('sidemenu')
    @include('admin.home.menu')
@endsection

@section('content')

    <div class="ui three column relaxed grid">
            @foreach (Menu::get('admin')->all()->chunk(3) as $items)
                <div class="row">
                    @foreach($items as $item)
                        <div class="column center aligned">
                            <div class="ui segment padded">
                                <h3><a href="{{ $item->url() }}" class=""><i class="{{ $item->icon }} icon"></i><br> {{ $item->title }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
    </div>
@endsection
