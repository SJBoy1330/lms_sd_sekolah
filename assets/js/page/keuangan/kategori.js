

  $(function() {
    $("#kt_table_kategori").on("click", function() {
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
