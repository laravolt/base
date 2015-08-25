<div class="ui menu small attached">
    <div class="ui container">
        <a href="{{ route('admin.home.index') }}" class="item icon"><i class="icon home"></i></a>

        @foreach (Menu::get('admin')->all() as $item)
            <a href="{{ $item->url() }}" class="item {{ $item->active?'active':'' }}"><i class="{{ $item->icon }} icon"></i> {{ $item->title }}</a>
        @endforeach
        <div class="menu right">
            <a href="{{ url('/') }}" class="item borderless"><i class="long arrow left icon"></i> Lihat Frontend</a>
            <div class="ui pointing link dropdown item borderless">
                <img class="ui avatar image" src="https://s3.amazonaws.com/uifaces/faces/twitter/teleject/24.jpg" alt="">
                {{ auth()->user()->name }} <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">@lang('menus.profile') &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="divider"></div>
                    <a href="{{ url('auth/logout') }}" class="item">@lang('menus.logout')</a>
                </div>
            </div>

        </div>
    </div>
</div>
