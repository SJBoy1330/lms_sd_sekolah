jQuery(document).ready(function () {
    ImgUpload();
  });
  
  function ImgUpload() {
    var imgWrap = "";
    var imgArray = [];
  
    $('.upload__inputfile').each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.row').find('.upload__img-wrap');
        var maxLength = $(this).attr('data-max_length');
  
        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);
        var iterator = 0;
        filesArr.forEach(function (f, index) {
  
          if (!f.type.match('image.*')) {
            return;
          }
  
          if (imgArray.length > maxLength) {
            return false
          } else {
            var len = 0;
            for (var i = 0; i < imgArray.length; i++) {
              if (imgArray[i] !== undefined) {
                len++;
              }
            }
            if (len > maxLength) {
              return false;
            } else {
              imgArray.push(f);
  
              var reader = new FileReader();
              reader.onload = function (e) {
                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                imgWrap.append(html);
                iterator++;
              }
              reader.readAsDataURL(f);
            }
          }
        });
      });
    });
  
    $('body').on('click', ".upload__img-close", function (e) {
      var file = $(this).parent().data("file");
      for (var i = 0; i < imgArray.length; i++) {
        if (imgArray[i].name === file) {
          imgArray.splice(i, 1);
          break;
        }
      }
      $(this).parent().parent().remove();
    });
  }

// CKEDITOR

// Pilihan Ganda
    var quill = new Quill('#kt_forms_widget_1_editor_grupsoal', {
        modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_grupsoal"}},
        placeholder: 'Isikan soal',
        theme: 'snow' // or 'bubble'
    });

    var quill = new Quill('#kt_forms_widget_1_editor_jawabanpilgan', {
        modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_jawabanpilgan"}},
        placeholder: 'Isikan jawaban soal',
        theme: 'snow' // or 'bubble'
    });

    var quill = new Quill('#kt_forms_widget_1_editor_tambahopsipilgan', {
        modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_tambahopsipilgan"}},
        placeholder: 'Isikan jawaban soal',
        theme: 'snow' // or 'bubble'
    });

    
// Akhir Pilihan Gandar

// Pilihan Ganda Kompleks
    var quill = new Quill('#kt_forms_widget_1_editor_jawabanpilgankompleks', {
        modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_jawabanpilgankompleks"}},
        placeholder: 'Isikan jawaban soal',
        theme: 'snow' // or 'bubble'
    });

    var quill = new Quill('#kt_forms_widget_1_editor_tambahopsipilgankompleks', {
        modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_tambahopsipilgankompleks"}},
        placeholder: 'Isikan jawaban soal',
        theme: 'snow' // or 'bubble'
    });
// Akhir Pilihan Ganda Kompleks


// Penjodohan
    var quill = new Quill('#kt_forms_widget_1_editor_jawabanpenjodohan', {
        modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_jawabanpenjodohan"}},
        placeholder: 'Isikan daftar pertanyaan',
        theme: 'snow' // or 'bubble'
    });

    var quill = new Quill('#kt_forms_widget_1_editor_tambahopsipenjodohan', {
        modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_tambahopsipenjodohan"}},
        placeholder: 'Isikan daftar pertanyaan',
        theme: 'snow' // or 'bubble'
    });
// Akhir Penjodohan

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
