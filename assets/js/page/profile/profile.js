$(document).ready(function () {
    $('#foto').change(function () {
        let files = $('#foto')[0].files

        let fd = new FormData();
        fd.append('foto', files[0])
        $.ajax({
            url: `${BASE_URL}/func_profile/ubah_foto`,
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (data) {
                data = JSON.parse(data)
                if (data.status == true) {
                    var icon = 'success';
                } else {
                    var icon = 'warning';
                }
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
                    } else if (data.reload == true) {
                        location.reload();
                    }
                });

            },
        });
    })
})