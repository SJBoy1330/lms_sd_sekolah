$(function() {
  $('input[name="tanggal"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});

$(function() {
  $("#kt_table_guru").on("click", function() {
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

setTimeout(function() {
  $('tr').each(function(i) {
      setTimeout(function() {
           $('tr').eq(i).addClass('fadein-left');
      }, 200 * i);
  });
}, 150 );