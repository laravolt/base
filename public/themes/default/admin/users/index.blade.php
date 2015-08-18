@extends('admin.layouts.main')

@section('content')
    <h3 class="ui header attached top">{{ $totalUsers }} Users</h3>
    <table class="ui table compact attached">
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>
                    <div class="ui icon buttons">
                        <div class="ui top right pointing dropdown button basic small">
                            <i class="setting icon"></i>

                            <div class="menu">
                                <div class="item">@lang('users.edit_profile')</div>
                                <div class="item">@lang('users.reset_password')</div>
                                <div class="divider"></div>
                                <div class="item"><i class="delete icon"></i> @lang('users.delete')</div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
