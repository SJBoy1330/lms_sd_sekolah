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
    })
});