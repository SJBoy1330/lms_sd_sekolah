$(function() {
    $("#kt_table_staf").on("click", function() {
        $("#deleteall").toggle($(this).find("#inputcheckbox:checked").length > 0);
        if($(this).find("#inputcheckbox:checked").length < 1){
            $('input[name="maincheckbox"]').prop('checked', false);
        }    })
    $('input[name="maincheckbox"]').on("click", function() {
        $('.form-check-input').prop('checked', this.checked);
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
    })

    
});

