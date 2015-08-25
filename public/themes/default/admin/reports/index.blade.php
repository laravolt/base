@extends('admin.layouts.main')

@section('sidemenu')
    <div class="ui vertical menu fluid left pointing">
        <div class="item">
            <div class="header">@lang('menu.shortcut')</div>
            <div class="menu">
                <a class="item">Pertumbuhan Pengguna</a>
                <a class="item">Pertumbuhan Konten</a>
                <a class="item active left">Laporan Lainnya</a>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <div class="ui segment">
        <h2 class="ui header">Laporan</h2>
    </div>
@endsection
