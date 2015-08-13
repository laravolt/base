<div class="ui segment mural-container">
    <div class="column" id="form_comment">
        <h3 class="ui header">@lang('mural.title_with_count', ['count' => $content['comment_count']])</h3>
        @include('mural::form')
    </div>

    <div class="ui comments mural-list">
        @include('mural::list', ['comments' => $comments])
    </div>
    <a href="#" data-url="{{ route('mural.fetch', ['commentable_id' => $content->getKey()]) }}" class="ui fluid basic submit button mural-more" data-no-more-content="@lang('mural.no_more_content')">@lang('mural.load_more')</a>
</div>


<script type="text/javascript">
    $(function(){
        @if(auth()->check())
        $('.mural-container').on('submit', '.mural-form', function(e) {
            e.preventDefault();
            var form = $(e.currentTarget);
            var btn = form.find('button[type=submit]');
            var commentContainer = $(e.delegateTarget).find('.mural-list');

            if(btn.hasClass('disabled')) {
                return false;
            }

            btn.addClass('loading disabled');

            $.ajax({
                type: "POST",
                url: form.attr('action'),
                data: form.serialize(),
                success: function(html){
                    commentContainer.prepend(html);
                    form.find("input[type=text], textarea").val('');
                },
                error: function(){
                    alert('Something goes wrong');
                },
                complete: function() {
                    btn.removeClass('loading disabled');
                }
            });
        });
        @endif

        $(".mural-container").on('click', '.mural-more', function(e) {
            e.preventDefault();
            var btn = $(e.currentTarget);

            if(btn.hasClass('disabled')) {
                return false;
            }

            btn.addClass('loading disabled');
            var commentContainer = $(e.delegateTarget).find('.mural-list');

            $.ajax({
                type: "GET",
                url: btn.data('url'),
                data: {last_id: commentContainer.find('.comment:last').data('id')},
                success: function (html) {
                    if(html.length > 0) {
                        commentContainer.append(html);
                        btn.removeClass('disabled');
                    } else {
                        btn.attr("disabled", "disabled").html(btn.data('no-more-content'));
                    }
                },
                error: function () {
                    alert('Something goes wrong');
                },
                complete: function() {
                    btn.removeClass('loading');
                }
            });
            return false;
        });
    });
</script>
