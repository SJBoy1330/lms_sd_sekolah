$(function() {
    $("#kt_table_siswa").on("click", function() {
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
        let redirect = `${BASE_URL}/master/siswa`;
        let query = [];

        let tahun_ajaran = $('#select_tahun_ajaran option:selected').val();
        if (tahun_ajaran !== null && tahun_ajaran !== "") {
            query.push(`tahun_ajaran=${tahun_ajaran}`);
        }

        let tingkat = $('#select_tingkat option:selected').val();
        if (tingkat !== null && tingkat !== "") {
            query.push(`tingkat=${tingkat}`);
        }

        let kelas = $('#select_kelas option:selected').val();
        if (kelas !== null && kelas !== "") {
            query.push(`kelas=${kelas}`);
        }

        if (query.length > 0) {
            redirect = redirect + "?" + query.join("&");
        }

        location.href = redirect;
    });

    $('#detailSiswaBtn').on('click', function () {
        let idsiswa = $(this).data('idsiswa');
        console.log("idsiswa", idsiswa);

        $.ajax({
            url: `${BASE_URL}/master/modal_detail_siswa`,
            method: "POST",
            data: {
                id_siswa: idsiswa
            },
            success: function (data) {
                $('#detail-siswa-display').html(data);
            }
        });
    });
})


modalDetail


