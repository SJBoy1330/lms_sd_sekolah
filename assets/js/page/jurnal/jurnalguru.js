$(function() {
  $('input[name="tanggal"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});

$(function() {
  $("#kt_table_guru").on("click", function() {
      $("#deleteall").toggle($(this).find("#inputcheckbox:checked").length > 0);
      if($(this).find("#inputcheckbox:checked").length < 1){
          $('input[name="maincheckbox"]').prop('checked', false);
      }    })
  $('input[name="maincheckbox"]').on("click", function() {
      $('.form-check-input').prop('checked', this.checked);
  });

});