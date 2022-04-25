$(function() {
    $('input[name="tanggal"]').daterangepicker({
        autoApply:true,
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1901,
      maxYear: parseInt(moment().format('YYYY'),10)
    });
  });