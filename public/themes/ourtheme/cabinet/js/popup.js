document.addEventListener("DOMContentLoaded", function (event) {
    $('.show_popup').click(function () {
        var popup_id = $('#' + $(this).attr("rel"));
        $(popup_id).show();
        $('.overlay_popup').show();
    });

    $('.overlay_popup').click(function () {
        $('.overlay_popup, .popup').hide();
    });

    $('.closePP').click(function () {
        $('.overlay_popup, .popup').hide();
    });


    $('#okPP1').click(function () {
        $('.overlay_popup, .popup').hide();
        $('.messageRow').fadeOut(500, function () {
            $(this).html('<p class="text-center bg-primary">Запрос на новый UID отправлен<p>').fadeIn(500);
        });
        setTimeout(function () {
            $('.messageRow').fadeOut(500, function () {
                $(this).fadeOut(400).hide;
            });
        }, 3000);
    });

    $('#formLockUID').submit((event) => {
        event.preventDefault();
        let child_id = event.target['child_id'].value;
        let _token = event.target['_token'].value;

        $.ajax({
            url: '/key/lock',
            method: 'POST',
            data: {_token, child_id}
        }).done((result) => {
            if (result['ok'] != true) {
                alert(result['errors'][0]);
            } else {
                $('.overlay_popup, .popup').hide();
                $('.messageRow').fadeOut(500, function () {
                    $(this).html('<p class="text-center bg-danger">UID заблокирован<p>').fadeIn(500);
                });
                setTimeout(() => {
                    $('.messageRow').fadeOut(500, () => {
                        $(this).fadeOut(400).hide;
                    });
                }, 3000);
                $('#UIDStatus').text('(ЗАБЛОКИРОВАН)').removeClass('text-success').addClass('text-danger');
                $('#lockLink').css('display', 'none');
                $('#unlockLink').css('display', 'block');
            }
        }).fail((jqXHR, textStatus) => {
            console.log(textStatus);
        });

    });

    $('#formUnlockUID').submit((event) => {
        event.preventDefault();
        let child_id = event.target['child_id'].value;
        let _token = event.target['_token'].value;

        $.ajax({
            url: '/key/unlock',
            method: 'POST',
            data: {_token, child_id}
        }).done((result) => {
            if (result['ok'] != true) {
                alert(result['errors'][0]);
            } else {

                $('.overlay_popup, .popup').hide();
                $('.messageRow').fadeOut(500, function () {
                    $(this).html('<p class="text-center bg-success">UID разблокирован<p>').fadeIn(500);
                });
                setTimeout(function () {
                    $('.messageRow').fadeOut(500, function () {
                        $(this).fadeOut(400).hide;
                    });
                }, 3000);
                $('#lockLink').css('display', 'block');
                $('#unlockLink').css('display', 'none');
                $('#UIDStatus').text('(АКТИВНЫЙ)').removeClass('text-danger').addClass('text-success');
            }
        }).fail((jqXHR, textStatus) => {
            console.log(textStatus);
        });

    });


});
