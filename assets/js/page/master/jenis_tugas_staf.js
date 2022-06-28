$(function() {
    $("#kt_table_jenis_tugas").on("click", function() {
        $("#deleteall").toggle($(this).find(".deletebox:checked").length > 0);
        if($(this).find(".deletebox:checked").length < ($(this).find(".deletebox").length)){
            $('input[name="maincheckbox"]').prop('checked', false);
        }else if($(this).find(".deletebox:checked").length = ($(this).find(".deletebox").length)){
            $('input[name="maincheckbox"]').prop('checked', true);
        }
    })
    $('input[name="maincheckbox"]').on("click", function() {
        $('.deletebox').prop('checked', this.checked);
    });
});

$(document).ready(function () {
    $('#btn-filter').on('click', function () {
        let redirect = `${BASE_URL}/master/jenis_tugas_staf`;

        let bidang_tugas = $('#select_bidang_tugas option:selected').val();
        if (bidang_tugas !== null && bidang_tugas !== "") {
            redirect = redirect + "?" + `bidang_tugas=${bidang_tugas}`;
        }
        location.href = redirect;
    });

    $('.btn-tambah-edit-modal-jenis-tugas').on('click', function () {
        let idjenis_tugas = $(this).data('idjenis-tugas');

        $.ajax({
            url: `${BASE_URL}/master/modal_edit_tambah_jenis_tugas`,
            method: "POST",
            data: {
                id_jenis_tugas: idjenis_tugas
            },
            beforeSend: function () {
                $('#content-edit-tambah-jenis-tugas').html(null);
            },
            success: function (data) {
                $('#content-edit-tambah-jenis-tugas').html(data);
            }
        });
    });

    $('.btn-hapus-jenis-tugas').on('click', function () {

        let idjenis_tugas = $(this).data('idjenis-tugas');

        $.ajax({
            url: `${BASE_URL}/func_master/hapus_jenis_tugas/${idjenis_tugas}`,
            method: "POST",
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
})

