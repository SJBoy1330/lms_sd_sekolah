$(function() {
    $("#kt_table_staf").on("click", function() {
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

