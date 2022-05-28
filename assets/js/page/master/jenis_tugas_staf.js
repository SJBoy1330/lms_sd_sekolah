$(function() {
    $("#kt_table_jenis_tugas").on("click", function() {
        $("#deleteall").toggle($(this).find("#inputcheckbox:checked").length > 0);
        if($(this).find("#inputcheckbox:checked").length < 1){
            $('input[name="maincheckbox"]').prop('checked', false);
        }    })
    $('input[name="maincheckbox"]').on("click", function() {
        $('.form-check-input').prop('checked', this.checked);
    });

});



