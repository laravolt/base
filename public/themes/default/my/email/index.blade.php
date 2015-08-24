@extends('my.layouts.main')

@section('content')
    <div class="ui divided list very relaxed">
        <div class="item">
                uyab.exe@gmail.com
            <div class="ui horizontal label">Primary Email</div>
        </div>
        <div class="item">
                bayu.hendra@javan.co.id
            <div class="ui horizontal link list">
                <a class="item">
                    Set as primary
                </a>
                <a class="item">
                    Remove
                </a>
            </div>
        </div>
        <div class="item">
                bayu.hendra@ngomik.com
            <div class="ui horizontal link list">
                <a class="item">
                    Set as primary
                </a>
                <a class="item">
                    Remove
                </a>
            </div>
        </div>
    </div>
@endsection
