@if(auth()->check())
    <form class="ui reply form" method="POST" action="#">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="field">
            <textarea name="description" id="description" placeholder="@lang('mural.write_a_comment')"></textarea>
        </div>
        <button type="submit" id="sumbitcomment" class="ui fluid large teal submit button">@lang('comment.submit')</button>
    </form>
@else
    <div class="ui message warning">
        @lang('mural.must_login', ['link' => url('/auth/login')])
    </div>
@endif
