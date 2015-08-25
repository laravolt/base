@extends('admin.layouts.main')

@section('topmenu')
    <div class="ui breadcrumb" id="breadcrumb">
        <a class="section">Admin</a>
        <div class="divider"> / </div>
        <div class="active section">Pengguna</div>
    </div>
@endsection


@section('sidemenu')
    @include('admin.users.menu')
@endsection

@section('content')
    <div class="ui top attached menu">
        <div class="menu">
            <div class="item borderless">
                <h4>@lang('entities.user')</h4>
            </div>
        </div>
        <div class="right menu">
            {{--<div class="ui dropdown item">--}}
                {{--<div class="text">Semua Status</div> <i class="dropdown icon"></i>--}}
                {{--<div class="menu">--}}
                    {{--<a href="" class="item">Semua (90)</a>--}}
                    {{--@foreach(\App\Enum\UserStatus::values() as $key=>$value)--}}
                        {{--<a href="" class="item">{{ $value }}</a>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="ui dropdown item">--}}
                {{--Semua Role <i class="dropdown icon"></i>--}}
                {{--<div class="menu">--}}
                    {{--<a href="" class="item">Semua (90)</a>--}}
                    {{--@foreach(\App\Enum\UserStatus::values() as $key=>$value)--}}
                        {{--<a href="" class="item">{{ $value }}</a>--}}
                    {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="ui right aligned item">
                <div class="ui transparent icon input">
                    <input class="prompt" type="text" placeholder="@lang('action.search')">
                    <i class="search link icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="ui segment attached fitted">
        <table class="ui very compact table bottom small">
            <thead>
            <tr>
                <th>@lang('user.name')</th>
                <th>@lang('user.email')</th>
                <th>@lang('user.roles')</th>
                <th class="ui right aligned">@lang('user.registered')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        <a href="{{ route('admin.users.edit', $user['id']) }}" class="">{{ $user['name'] }}</a>
                    </td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['roles_as_text'] }}</td>
                    <td class="ui right aligned">{{ $user['registered_date'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="ui menu bottom attached">
        <div class="item borderless">
            <small>{!! with(new \Laravolt\Support\Pagination\SemanticUiPagination($users))->summary() !!}</small>
        </div>
        {!! with(new \Laravolt\Support\Pagination\SemanticUiPagination($users))->render('attached bottom right') !!}
    </div>

@endsection
