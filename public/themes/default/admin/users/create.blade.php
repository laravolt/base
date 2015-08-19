@extends('admin.layouts.main')

@section('content')
    <div class="ui segments">
        <h4 class="ui segment">@lang('users.add')</h4>
        <div class="ui segment">
            <form action="{{ route('admin.users.store') }}" method="POST" class="ui form fluid">
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
                    <label>@lang('users.status')</label>
                    <input type="text" name="status" value="{{ old('status') }}">
                </div>
                <button class="ui button" type="submit">@lang('users.save')</button>
            </form>
        </div>
    </div>
@endsection
