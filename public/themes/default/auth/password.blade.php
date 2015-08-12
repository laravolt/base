@extends('layouts.frontend')

@section('content')

    <div class="ui centered stackable grid">

        <div class="column eight wide">

            @if (session('status'))
                <div class="ui positive message">
                    <p>{{ session('status') }}</p>
                </div>
            @endif

            <form class="ui form segment attached top header padded" method="POST" action="{{ url('/password/email') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="ui fluid">
                    <p class="left aligned">Masukkan alamat Email Anda & kami akan mengirimkan link reset password ke akun email Anda.</p>
                    <div class="ui field left icon input">
                        <input type="email" name="email" placeholder="Alamat Email" value="{{ old('email') }}">
                        <i class="mail icon"></i>
                    </div>

                    <button type="submit" class="ui submit fluid button primary">Kirim Link Reset Password</button>
                </div>
            </form>
            <div class="ui bottom attached segment secondary center aligned">
                Belum punya akun? <a href="{{ url('auth/register') }}">Daftar Disini</a>
            </div>
        </div>
    </div>

@endsection
