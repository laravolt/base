<div class="ui segment">
    <div class="column" id="form_comment">
        <h3 class="ui header">@lang('mural.title_with_count', ['count' => $content['comment_count']])</h3>
        @include('mural::form')
    </div>

    <div class="ui comments">
        <div id="update"></div>
        @include('mural::list', ['comments' => $comments])
        <div id="results"></div>
    </div>
    <button type="submit" id="load_more" class="ui fluid basic submit button" data-no-more-content="@lang('mural.no_more_content')">@lang('mural.load_more')</button>
</div>


<script type="text/javascript">
    $(function(){
        @if(auth()->check())
        $("#sumbitcomment").click(function(event) {
            event.preventDefault();
            $('#sumbitcomment').addClass('loading');

            var description = $("#description").val();

            $('#sumbitcomment').addClass('loading');

            if(description=='')
            {
                alert('Please Give Valide Details');
                $('#sumbitcomment').removeClass('loading');
            }
            else
            {
                $.ajax({

                    type: "POST",
                    url: "{{ route("mural.store") }}",
                    data: {
                        'body': $("#description").val(),
                        'commentable_id': {{ $content->id  }}
                    },
                    success: function(html){
                        $("div#update").prepend(html);
                        document.getElementById('description').value='';
                        $("#description").focus();
                    },
                    error: function(html){
                        alert("Tidak bisa comment");
                    },
                    complete: function() {
                        $('#sumbitcomment').removeClass('loading');
                    }
                });
            }
            return false;
        });
        @endif

        var track_click = 0;
        $("#load_more").click(function(event) {
            track_click = track_click+10;
            event.preventDefault();
            $('#load_more').addClass('loading');
            $.ajax({
                type: "GET",
                url: "{{ route("mural.fetch") }}",
                cache: false,
                data: {
                    'commentable_id': {{ $content->id  }}
                },
                success: function (html) {
                    if(html.length > 0) {
                        $("div#results").prepend(html);
                    } else {
                        $("#load_more").attr("disabled", "disabled").html($("#load_more").data('no-more-content'));
                    }
                },
                error: function (html) {
                },
                complete: function() {
                    $('#load_more').removeClass('loading');
                }
            });
            return false;
        });
    });
</script>
