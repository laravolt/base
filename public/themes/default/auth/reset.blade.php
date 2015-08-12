@extends('layouts.frontend')

@section('content')

    <div class="ui centered stackable grid">

        <div class="column eight wide center aligned">

            @if (session('status'))
                <div class="ui positive message">
                    <p>{{ session('status') }}</p>
                </div>
            @endif

            <form class="ui form segment attached top header padded" method="POST" action="{{ url('/password/reset') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="ui fluid">
                    <div class="field">
                        <input type="email" name="email" placeholder="Alamat Email" value="{{ old('email') }}">
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password Baru">
                    </div>
                    <div class="field">
                        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password Baru">
                    </div>
                    <button type="submit" class="ui submit fluid button primary">Reset Password</button>
                </div>
            </form>
            <div class="ui bottom attached segment secondary center aligned">
                Sudah punya akun? <a href="{{ url('auth/login') }}">Login Disini</a>
            </div>
        </div>
    </div>

@endsection
