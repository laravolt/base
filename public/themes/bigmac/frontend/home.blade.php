@extends('layouts.frontend')

@section('content')
    <div style="background: transparent url('{{ theme_asset('img/background-home.png') }}') no-repeat center center; background-size: cover">
        <img src="{{ theme_asset('img/foreground-home.png') }}" alt="" class="ui centered image">
    </div>
    <div class="ui segment basic" id="welcome">
        <div class="box ui segment basic">
            <h2 class="headline">Ayo ikutan bikin meme seru <strong>big day</strong> versi kalian sendiri</h2>
            <form class="ui form" id="form-start">
                <div class="inline field">
                    <div class="ui checkbox">
                        <input name="agree" id="agree" type="checkbox" tabindex="0">
                        <label for="agree">Saya menyetujui <a href="" class="button-tnc">syarat dan ketentuan</a> yang berlaku</label>
                    </div>
                </div>
                <div class="ui divider hidden"></div>
                <button type="submit" class="ui button primary disabled">IKUTAN SEKARANG</button>
            </form>
        </div>
    </div>

    @include('modals.tnc')
@endsection
