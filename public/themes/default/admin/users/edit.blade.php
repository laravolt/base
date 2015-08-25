@extends('admin.layouts.main')

@section('topmenu')
    <div class="ui breadcrumb" id="breadcrumb">
        <a class="section">Admin</a>
        <div class="divider"> / </div>
        <a class="section" href="{{ route('admin.users.index') }}">Pengguna</a>
        <div class="divider"> / </div>
        <div class="active section">Root</div>
    </div>
@endsection
@section('sidemenu')

    <div class="ui card">
        <div class="content">
            <img class="right floated mini ui image" src="https://s3.amazonaws.com/uifaces/faces/twitter/teleject/24.jpg">
            <div class="header">
                Elliot Fu
            </div>
            <div class="meta">
                Terdaftar 12 Agustus 2015
            </div>
            <div class="description">
                Elliot requested permission to view your contact details
            </div>
        </div>
        <div class="extra content">
            <div class="ui button fluid">Public Profile <i class="icon external right"></i></div>
        </div>
    </div>

    <div class="ui red segment">
        <h3 class="ui header red">@lang('users.delete')</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi aperiam aspernatur beatae consectetur ducimus ea earum eos maiores modi, non pariatur possimus quibusdam quisquam reprehenderit, sed suscipit ut voluptas.</p>

        <form action=""><button class="ui button red" type="submit">@lang('action.delete')</button></form>
    </div>

@endsection

@section('content')

    <div class="ui top attached small menu">
        <a class="item active" data-tab="profile">Profil</a>
        <a class="item" data-tab="account">Akun</a>
        <a class="item" data-tab="email">Email</a>
        <a class="item" data-tab="log">Log</a>
    </div>
    <div class="ui bottom attached tab segment active padded" data-tab="first">
        {!! Form::open([
            'method' => 'put',
            'route' => ['admin.users.update', $user['id']],
            'class' => 'ui form'
        ]) !!}
        {{ csrf_field() }}

        <div class="field">
            <label>@lang('user.name')</label>
            {!! Form::text('name', old('name', $user['name'])) !!}
        </div>
        <div class="field">
            <label>@lang('user.email')</label>
            {!! Form::text('email', old('email', $user['email'])) !!}
        </div>
        <div class="field">
            <label for="fruit">@lang('user.roles')</label>

            <div class="inline fields">
                @foreach($roles as $key=>$value)
                    <div class="field">
                        <div class="ui checkbox">
                            @if(old("roles[{$key}]", $user->hasRole($key)))
                                {!! Form::checkbox("roles[{$key}]", $key, true) !!}
                            @else
                                {!! Form::checkbox("roles[{$key}]", $key) !!}
                            @endif
                            <label>{{ $value }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="field">
            <label>@lang('user.status')</label>
            {!! Form::select('status', \App\Enum\UserStatus::values(), old('status'), ['class' => 'ui dropdown']) !!}
        </div>

        <div class="ui divider hidden"></div>
        <button class="ui button" type="submit" name="submit" value="1">@lang('form.save')</button>
        <a href="{{ route('admin.users.index') }}" class="ui button basic">@lang('form.cancel')</a>
        {!! Form::close() !!}
    </div>
    <div class="ui bottom attached tab segment" data-tab="second">
        Second
    </div>
    <div class="ui bottom attached tab segment" data-tab="third">
        Third
    </div>
@endsection
