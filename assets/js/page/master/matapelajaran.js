$(function () {
    $("#kt_table_mapel").on("click", function () {
        $("#deleteall").toggle($(this).find(".deletebox:checked").length > 0);
        if ($(this).find(".deletebox:checked").length < ($(this).find(".deletebox").length)) {
            $('input[name="maincheckbox"]').prop('checked', false);
        } else if ($(this).find(".deletebox:checked").length = ($(this).find(".deletebox").length)) {
            $('input[name="maincheckbox"]').prop('checked', true);
        }
    })
    $('input[name="maincheckbox"]').on("click", function () {
        $('.deletebox').prop('checked', this.checked);
    });
});

$(document).ready(function () {
    $('#btn-filter').on('click', function () {
        let redirect = `${BASE_URL}/master/mapel`;

        let tingkat = $('#select_tingkat option:selected').val();
        if (tingkat !== null && tingkat !== "") {
            redirect = redirect + "?" + `tingkat=${tingkat}`;
        }

        location.href = redirect;
    });

    $('.btn-hapus-mapel').on('click', function () {

        let idmapel = $(this).data('idmapel');

        $.ajax({
            url: `${BASE_URL}/func_master/hapus_mapel`,
            method: "POST",
            data: {
                id_mapel: idmapel,
            },
            beforeSend: function () {
                $(this).prop('disabled', true);
            },
            success: function (data) {
                $(this).prop('disabled', false);
                data = JSON.parse(data);

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
                    location.href = data.redirect;
                });
            }
        });
    });

    $('.btn-tambah-edit-modal-mapel').on('click', function () {

        let idmapel = $(this).data('idmapel');

        $.ajax({
            url: `${BASE_URL}/master/modal_edit_tambah_mapel`,
            method: "POST",
            data: {
                id_mapel: idmapel
            },
            beforeSend: function () {
                $('#content-edit-tambah-mapel').html(null);
            },
            success: function (data) {
                $('#content-edit-tambah-mapel').html(data);
            }
        });
    });
})