@if ($breadcrumbs)
    <div class="ui breadcrumb" id="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <a class="section" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                <div class="divider"> / </div>
            @else
                <div class="section active">{{ $breadcrumb->title }}</div>
            @endif
        @endforeach
    </div>
@endif
