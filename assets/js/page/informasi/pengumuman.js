var quill = new Quill('#kt_forms_widget_1_editor_pengumuman', {
    modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_pengumuman"}},
    placeholder: 'detail pengumuman...',
    theme: 'snow' // or 'bubble'
  });

$(function() {
  $("#kt_table_pengumuman").on("click", function() {
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