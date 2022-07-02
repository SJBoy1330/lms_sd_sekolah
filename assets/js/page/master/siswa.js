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

function previewImage() {
    const photo = document.querySelector('#photo');
    const getPhoto = document.querySelector('#photouser');

    getPhoto.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(photo.files[0]);

    oFReader.onload = function (oFREvent) {
        getPhoto.src = oFREvent.target.result;
    }
}

setTimeout(function() {
    $('tr').each(function(i) {
        setTimeout(function() {
             $('tr').eq(i).addClass('fadein-left');
             $('tr').eq(i).css("opacity",1);
        }, 200 * i);
    });
}, 150 );


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

    $('.detail-siswa-btn').on('click', function () {
        let idsiswa = $(this).data('idsiswa');
        console.log("idsiswa", idsiswa);

        $.ajax({
            url: `${BASE_URL}/master/modal_detail_siswa`,
            method: "POST",
            data: {
                id_siswa: idsiswa
            },
            beforeSend: function () {
                $('#detail-siswa-display').html(null);
            },
            success: function (data) {
                $('#detail-siswa-display').html(data);
            }
        });
    });

    $('.btn-tambah-edit-modal-siswa').on('click', function () {

        let idsiswa = $(this).data('idsiswa');

        $.ajax({
            url: `${BASE_URL}/master/modal_edit_tambah_siswa`,
            method: "POST",
            data: {
                id_siswa: idsiswa
            },
            beforeSend: function () {
                $('#content-edit-tambah-siswa').html(null);
            },
            success: function (data) {
                $('#content-edit-tambah-siswa').html(data);

            }
        });
    });

    $('#btn-export-pdf-siswa').on('click', function () {
        $.ajax({
            url: `${BASE_URL}/func_master/export_pdf_siswa`,
            method: "POST",
            beforeSend: function () {
                $(this).prop('disabled', true);
            },
            success: function (data) {
                $(this).prop('disabled', false);
                console.log(data);
            }
        })
    });
})
