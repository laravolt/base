@extends('layouts.base')

@section('body')
    <div id="builder">
        <div class="ui menu fixed borderless" id="menu-builder">
            <div class="item icon">
                <i class="icon left chevron"></i>
            </div>
            <div class="menu right">
                <div class="item icon">
                    <i class="icon right chevron"></i>
                </div>
            </div>
        </div>
        <div style="min-height: 500px">
            @yield('content')
        </div>
    </div>
@endsection
