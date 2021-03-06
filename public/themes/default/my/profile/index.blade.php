@extends('my.layouts.main')

@section('content')
    {!! Form::open([
        'method' => 'put',
        'route' => ['admin.users.update', $user['id']],
        'class' => 'ui form'
    ]) !!}
    {{ csrf_field() }}

    <div class="field">
        <label>@lang('users.name')</label>
        {!! Form::text('name', old('name', $user['name'])) !!}
    </div>
    <div class="field">
        <label>@lang('users.about')</label>
        {!! Form::text('about', old('about', $user['about'])) !!}
    </div>
    <div class="field">
        <label>@lang('users.website')</label>
        {!! Form::text('website', old('website', $user['website'])) !!}
    </div>
    <div class="ui divider hidden"></div>
    <button class="ui button" type="submit" name="submit" value="1">@lang('form.save')</button>
    {!! Form::close() !!}
@endsection
