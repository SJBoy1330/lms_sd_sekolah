setTimeout(function() {
    $('tr').each(function(i) {
        setTimeout(function() {
             $('tr').eq(i).addClass('fadein-left');
             $('tr').eq(i).css("opacity",1);
        }, 200 * i);
    });
}, 150 );


$(function() {
    $("#kt_table_bidang_tugas").on("click", function() {
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

    $('.btn-tambah-edit-modal-bidang-tugas').on('click', function () {
        let idbidang_tugas = $(this).data('idbidang-tugas');
        $.ajax({
            url: `${BASE_URL}/master/modal_edit_tambah_bidang_tugas`,
            method: "POST",
            data: {
                id_bidang_tugas: idbidang_tugas
            },
            beforeSend: function () {
                $('#content-edit-tambah-bidang-tugas').html(null);
            },
            success: function (data) {
                $('#content-edit-tambah-bidang-tugas').html(data);
            }
        });
    });

    $('.btn-hapus-bidang-tugas').on('click', function () {
        let idbidang_tugas = $(this).data('idbidang-tugas');
        $.ajax({
            url: `${BASE_URL}/func_master/hapus_bidang_tugas/${idbidang_tugas}`,
            method: "POST",
            beforeSend: function () {
                $(this).prop('disabled', true);
            },
            success: function (data) {
                $(this).prop('disabled', false);

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
});
