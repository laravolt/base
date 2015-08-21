@extends('admin.layouts.main')

@section('sidemenu')
    @include('admin.users.menu')
@endsection

@section('content')
    <div class="ui segments">
        <h4 class="ui segment block header">@lang('users.action.add')</h4>

        <div class="ui segment padded">
            <form action="{{ route('admin.users.store') }}" method="POST" class="ui form">
                {{ csrf_field() }}

                <div class="field">
                    <label>@lang('users.name')</label>
                    <input type="text" name="name" value="{{ old('name') }}">
                </div>
                <div class="field">
                    <label>@lang('users.email')</label>
                    <input type="text" name="email" value="{{ old('email') }}">
                </div>
                <div class="field">
                    <label>@lang('users.password')</label>
                    <input type="text" name="password" value="{{ old('password') }}">
                </div>
                <div class="field">
                    <label for="fruit">@lang('users.roles')</label>

                    <div class="inline fields">
                        @foreach($roles as $key=>$value)
                            <div class="field">
                                <div class="ui checkbox">
                                    <input type="checkbox" name="roles[]" value="{{ $key }}" tabindex="0" {{ (old('role') == $key)?"checked=checked":"" }}>
                                    <label>{{ $value }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="field">
                    <label>@lang('users.status')</label>
                    {!! Form::select('status', \App\Enum\UserStatus::values(), old('status'), ['class' => 'ui dropdown']) !!}
                </div>
                <div class="inline field">
                    <div class="ui checkbox">
                        <input type="checkbox" tabindex="0">
                        <label>@lang('users.registration.send_email')</label>
                    </div>
                </div>

                <div class="ui divider hidden"></div>
                <button class="ui button" type="submit" name="submit" value="1">@lang('form.save')</button>
                <button class="ui button" type="submit" name="continue" value="1">@lang('form.save_continue')</button>
            </form>
        </div>
    </div>

@endsection
