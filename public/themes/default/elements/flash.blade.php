@if (count($errors) > 0)
    <div class="ui error message">
        <div class="header">
            {{ trans('form.error_message') }}
        </div>
        <ul class="list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('flash_notification.message'))
    <div class="ui message {{ Session::get('flash_notification.level') }}">
        {{ Session::get('flash_notification.message') }}
    </div>
@endif
