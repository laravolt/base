$(function () {
    $('.button-tnc').on('click', function (e) {
        e.preventDefault();
        $('#modal-tnc').modal('show');
    });

    $('#form-start').on('change', '#agree', function(){
        if($(this).is(':checked')) {
            $('#form-start button').removeClass('disabled');
        } else {
            $('#form-start button').addClass('disabled');
        }
    });
});
