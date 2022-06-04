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


$(function () {
    $("#kt_table_staf").on("click", function () {
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
  
    $('#detailStafBtn').on('click', function () {
        let idstaf = $(this).data('idstaf');
        console.log("idstaf", idstaf);

        $.ajax({
            url: `${BASE_URL}/master/modal_detail_staf`,
            method: "POST",
            data: {
                id_staf: idstaf
            },
            success: function (data) {
                $('#detail-staf-display').html(data);
            }
        });
    });

    $('.btn-tambah-edit-modal').on('click', function () {
      
            let idstaf = $(this).data('idstaf');
            console.log("idstaf", idstaf);
    
            $.ajax({
                url: `${BASE_URL}/master/modal_edit_tambah`,
                method: "POST",
                data: {
                    id_staf: idstaf
                },
                beforeSend: function () {
                    $('#content-edit-tambah').html(null);
                },
                success: function (data) {
    
                    $('#content-edit-tambah').html(data);
                  
                }
            });
       
     
    });

    $('.btn-hapus-staf').on('click', function () {
        let idstaf = $(this).data('idstaf');
        $.ajax({
            url: `${BASE_URL}/func_master/hapus_staf/${idstaf}`,
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

    $('#deleteall').on('click', function () {
        let idstafArray = [];
        let deletebox = $('.deletebox');
        for (let i = 0; i < deletebox.length; i++) {
            const element = $('.deletebox').eq(i);
            if (element.is(":checked")) {
                idstafArray.push(element.data('idstaf'));
            }
        }

        $.ajax({
            url: `${BASE_URL}/func_master/hapus_staf_multiple`,
            method: "POST",
            data: {
                id_staf: JSON.stringify(idstafArray)
            },
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

