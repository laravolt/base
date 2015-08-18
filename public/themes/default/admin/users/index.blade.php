@extends('admin.layouts.main')

@section('content')
    <div class="ui top attached menu">
        <div class="menu">
            <div class="item borderless">
                @lang('users.title_with_count', ['count' => $totalUsers])
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
    <table class="ui compact table attached bottom small">
        <thead>
        <tr>
            <th>@lang('users.name')</th>
            <th>@lang('users.email')</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td style="width: 50px">
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
    <div class="ui menu attached bottom">
        <div class="item borderless">
            <small>Menampilkan 1-10 dari total 50</small>
        </div>
        {!! with(new \Laravolt\Support\Pagination\SemanticUiPagination($users))->render('attached bottom right') !!}
    </div>

@endsection
