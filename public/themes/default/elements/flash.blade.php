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

    <?php
        $level = Session::get('flash_notification.level');
        if($level == 'warning') {
            $level = 'error';
        }
    ?>
    <div style="" class="ui container">
        <div class="ui message {{ $level }}" style="text-align: center;">
            {{ Session::get('flash_notification.message') }}
        </div>
    </div>
@endif
