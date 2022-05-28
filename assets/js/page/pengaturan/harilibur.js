$(function() {
    $('input[name="tanggal"]').daterangepicker({
      timePicker: true,
      startDate: moment().startOf('hour'),
      endDate: moment().startOf('hour').add(32, 'hour'),
      locale: {
        format: 'M/DD hh:mm A'
      }
    });
  });

  

$(function() {
  $("#kt_table_libur").on("click", function() {
      $("#deleteall").toggle($(this).find("#inputcheckbox:checked").length > 0);
      if($(this).find("#inputcheckbox:checked").length < 1){
          $('input[name="maincheckbox"]').prop('checked', false);
      }    })
  $('input[name="maincheckbox"]').on("click", function() {
      $('.form-check-input').prop('checked', this.checked);
  });

});