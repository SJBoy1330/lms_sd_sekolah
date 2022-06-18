$(function() {
    $("#kt_table_tugas_siswa").on("click", function() {
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
    $("#kt_table_tugas_siswa2").on("click", function() {
      $("#deleteall2").toggle($(this).find(".deletebox2:checked").length > 0);
      if($(this).find(".deletebox2:checked").length < ($(this).find(".deletebox2").length)){
          $('input[name="maincheckbox"]').prop('checked', false);
      }else if($(this).find(".deletebox2:checked").length = ($(this).find(".deletebox2").length)){
        $('input[name="maincheckbox"]').prop('checked', true);
    }
  })
  $('input[name="maincheckbox"]').on("click", function() {
      $('.deletebox2').prop('checked', this.checked);
  });
  
  });
  
  
  
  