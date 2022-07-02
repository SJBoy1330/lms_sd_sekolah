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

  setTimeout(function() {
    $('tr').each(function(i) {
        setTimeout(function() {
             $('tr').eq(i).addClass('fadein-left');
             $('tr').eq(i).css("opacity",1);
        }, 200 * i);
    });
}, 150 );


$(function() {
  $("#kt_table_libur").on("click", function() {
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

$(function() {
  $("#kt_table_liburnasional").on("click", function() {
    $("#deleteall2").toggle($(this).find(".deletebox2:checked").length > 0);
    if($(this).find(".deletebox2:checked").length < ($(this).find(".deletebox2").length)){
        $('input[name="maincheckbox2"]').prop('checked', false);
    }else if($(this).find(".deletebox2:checked").length = ($(this).find(".deletebox2").length)){
      $('input[name="maincheckbox2"]').prop('checked', true);
  }
})
$('input[name="maincheckbox2"]').on("click", function() {
    $('.deletebox2').prop('checked', this.checked);
});

});