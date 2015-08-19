<div class="ui menu attached">
    <div class="ui container">
        @foreach (Menu::get('admin')->all() as $item)
            <a href="{{ $item->url() }}" class="item"><i class="{{ $item->icon }} icon"></i> {{ $item->title }}</a>
        @endforeach
    </div>
</div>
