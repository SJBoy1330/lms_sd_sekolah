function submit_form(element, id_form) {
    var form = document.querySelector(id_form);
    var data = $(id_form).serialize();
    var url = $(id_form).attr('url');
    var button = document.getElementById(element.id);
    $.ajax({
        url: url,
        data: data,
        cache: false,
        method: 'post',
        dataType: 'json',
        beforeSend: function () {
            $("#" + element.id).prop('disabled', true);
            // $("#" + element.id).html('<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>');
        },
        success: function (data) {
            $("#" + element.id).prop('disabled', false);
            // $("#" + element.id).html('<span class="indicator-label">Simpan</span>');
            $('.fadedin').remove();

            if (data.status == true) {
                var icon = 'success';
            } else {
                var icon = 'warning';
            }
            if (data.alert) {
                Swal.fire({
                    title: data.alert.title,
                    text: data.alert.message,
                    icon: icon,
                    buttonsStyling: !1,
                    confirmButtonText: "Ok",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(function () {
                    if (data.redirect) {
                        location.href = data.redirect;
                    } else {
                        location.reload();
                    }
                });
            } else {
                if (data.required) {
                    const array = data.required.length;
                    for (var i = 0; i < array; i++) {
                        $("#" + data.required[i][0]).append('<span class="text-danger fadedin">' + data.required[i][1] + '</span>');
                    }
                }
                if (data.redirect) {
                    location.href = data.redirect;
                }
            }
        }
    });
}