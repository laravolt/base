@extends('admin.layouts.main')

@section('content')
    <h3 class="ui header block attached top">Edit User #{{ $user['id'] }}</h3>

    <form action="{{ route('admin.users.update', $user['id']) }}" method="POST" class="ui form fluid segment attached bottom">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div class="field">
            <label>@lang('users.name')</label>
            <input type="text" name="name" value="{{ old('name', $user['name']) }}">
        </div>
        <div class="field">
            <label>@lang('users.email')</label>
            <input type="text" name="email" value="{{ old('email', $user['email']) }}">
        </div>
        <div class="field">
            <label>@lang('users.status')</label>
            <input type="text" name="status" value="{{ old('status', $user['status']) }}">
        </div>
        <button class="ui button" type="submit">Simpan</button>
    </form>
@endsection
