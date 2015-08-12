@extends('layouts.frontend')

@section('content')

    <div class="ui centered stackable grid">

        <div class="column eight wide center aligned">

            <form class="ui form segment attached top header padded" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="ui fluid">
                    <div class="ui field left icon input">
                        <input type="email" name="email" placeholder="@lang('form.email_address')" value="{{ old('email') }}">
                        <i class="mail icon"></i>
                    </div>
                    <div class="ui field left icon input">
                        <input type="password" name="password" placeholder="@lang('form.password')">
                        <i class="lock icon"></i>
                    </div>
                    <div class="ui equal width grid">
                        <div class="column left aligned">
                            <div class="ui checkbox">
                                <input type="checkbox" name="remember">
                                <label>@lang('form.remember')</label>
                            </div>
                        </div>
                        <div class="column"></div>
                        <div class="column right aligned">
                            <button type="submit" class="ui submit fluid button primary">@lang('form.login')</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="ui bottom attached segment secondary padded">
                <div class="ui two column grid">
                    <div class="column left aligned">
                        <a href="{{ url('/password/email') }}">Lupa password</a>
                    </div>
                    <div class="column right aligned">
                        Belum punya akun? <a href="{{ url('auth/register') }}">Daftar Disini</a>
                    </div>
                </div>
            </div>

            <div class="ui divider horizontal">Atau</div>
            <div class="column eight wide center aligned">
                <a href="{{ url('/oauth/facebook') }}" class="ui basic button"><i class="facebook icon"></i> Login Dengan Facebook</a>
            </div>

        </div>
    </div>

@endsection
