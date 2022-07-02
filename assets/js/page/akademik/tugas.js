var quill = new Quill('#kt_forms_widget_1_editor_tugas', {
  modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_tugas"}},
  placeholder: 'detail tugas...',
  theme: 'snow' // or 'bubble'
});



$(function() {
    $('input[name="tanggal"]').daterangepicker({
        autoApply:true,
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1901,
      maxYear: parseInt(moment().format('YYYY'),10)
    });
  });

$(function() {
  $("#kt_table_tugas").on("click", function() {
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
           $('tr').eq(i).css("opacity",1);
      }, 200 * i);
  });
}, 150 );




