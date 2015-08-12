@extends('layouts.frontend')

@section('content')

    <div class="ui centered stackable grid" >

        <div class="column eight wide center aligned">

            <form class="ui form segment attached top header padded" method="POST" action="{{ url('/auth/register') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="ui fluid">
                    <div class="ui field left icon input">
                        <input type="text" name="name" placeholder="@lang('form.fullname')" value="{{ old('name') }}">
                        <i class="user icon"></i>
                    </div>
                    <div class="ui field left icon input">
                        <input type="email" name="email" placeholder="@lang('form.email_address')" value="{{ old('email') }}">
                        <i class="mail icon"></i>
                    </div>
                    <div class="ui field left icon input">
                        <input type="password" name="password" placeholder="@lang('form.password')">
                        <i class="lock icon"></i>
                    </div>
                    <div class="ui grid">
                        <div class="column right aligned">
                            <button type="submit" class="ui submit fluid button primary">@lang('form.register')</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="ui bottom attached segment secondary center aligned">
                Sudah punya akun? <a href="{{ url('auth/login') }}">Login Disini</a>
            </div>

            <div class="ui divider horizontal">Atau</div>

            <div class="row">
                <div class="column eight wide center aligned">
                    <a href="{{ url('/oauth/facebook') }}" class="ui facebook button"><i class="facebook icon"></i> Daftar Dengan Facebook</a>
                    <a href="{{ url('/oauth/twitter') }}" class="ui twitter button"><i class="twitter icon"></i> Daftar Dengan Twitter</a>
                </div>
            </div>


        </div>
    </div>

@endsection
