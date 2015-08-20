<div class="ui menu vertical fluid">
    <div class="item">
        <a href="{{ route('admin.users.create') }}" class="ui button fluid green">Tambah Pengguna</a>
    </div>
    <div class="item">
        <h3 class="header">Filter By Status</h3>
        <div class="menu">
            <a href="" class="item">Semua (90)</a>
            @foreach(\App\Enum\UserStatus::values() as $key=>$value)
                <a href="" class="item">{{ $value }}</a>
            @endforeach
        </div>
    </div>
    <div class="item">
        <h3 class="header">Filter By Role</h3>
        <div class="menu">
            <a href="" class="item">Semua (90)</a>
            <a href="" class="item">Root (10)</a>
            <a href="" class="item">Admin (10)</a>
            <a href="" class="item">User (10)</a>
        </div>
    </div>
</div>
