@extends('admin.layouts.main')

@section('sidemenu')
    @include('admin.users.menu')
@endsection

@section('content')
    <div class="ui top attached menu">
        <div class="menu">
            <div class="item borderless">
                <h4>@lang('users.title_with_count', ['count' => $totalUsers])</h4>
            </div>
        </div>
        <div class="right menu">
            <div class="ui right aligned item">
                <div class="ui transparent icon input">
                    <input class="prompt" type="text" placeholder="@lang('users.search')">
                    <i class="search link icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="ui segment attached" style="padding: 0">
        <table style="border: 0 none" class="ui very compact table bottom small">
            <thead>
            <tr>
                <th>@lang('users.name')</th>
                <th>@lang('users.email')</th>
                <th>@lang('users.roles')</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['roles_as_text'] }}</td>
                    <td style="width: 100px" class="center aligned">
                        <a href="{{ route('admin.users.edit') }}" class="ui button basic compact small">@lang('users.edit')</a>
                        {{--<div class="ui icon buttons">--}}
                        {{--<div class="ui top right pointing dropdown button basic small">--}}
                        {{--<i class="setting icon"></i>--}}

                        {{--<div class="menu">--}}
                        {{--<a href="{{ route('admin.users.edit', $user['id']) }}" class="item">@lang('users.edit_profile')</a>--}}
                        {{--<div class="item">@lang('users.reset_password')</div>--}}
                        {{--<div class="divider"></div>--}}
                        {{--<div class="item"><i class="delete icon"></i> @lang('users.delete')</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="ui menu attached bottom">
        <div class="item borderless">
            <small>Menampilkan 1-10 dari total 50</small>
        </div>
        {!! with(new \Laravolt\Support\Pagination\SemanticUiPagination($users))->render('attached bottom right') !!}
    </div>

@endsection
