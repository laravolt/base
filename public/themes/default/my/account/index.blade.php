@extends('my.layouts.main')

@section('content')
    {!! Form::open([
        'method' => 'put',
        'route' => ['admin.users.update', $user['id']],
        'class' => 'ui form'
    ]) !!}
    {{ csrf_field() }}

    <div class="field">
        <label>@lang('users.password.current')</label>
        {!! Form::text('current') !!}
    </div>
    <div class="field">
        <label>@lang('users.password.new')</label>
        {!! Form::text('new') !!}
    </div>
    <div class="field">
        <label>@lang('users.password.new_confirm')</label>
        {!! Form::text('new_confirmed') !!}
    </div>
    <div class="ui divider hidden"></div>
    <button class="ui button" type="submit" name="submit" value="1">@lang('form.save')</button>
    {!! Form::close() !!}
@endsection
