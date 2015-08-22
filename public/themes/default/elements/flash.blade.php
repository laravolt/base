@if (count($errors) > 0)
    <div class="ui error message">
        <i class="close icon"></i>
        <div class="header">
            {{ trans('form.failed') }}
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
    <div class="ui message {{ $level }}" style="text-align: center;">
        <i class="close icon"></i>
        {!! Session::get('flash_notification.message') !!}
    </div>
@endif
