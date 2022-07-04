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
// Akhir Pilihan Gandar

// Pilihan Ganda Kompleks



// Akhir Pilihan Ganda Kompleks


// Penjodohan

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


var count = 1;
function tambah_input_pilgan(count) {
	var field = '';
	if (count > 1) {
		field = `<div class="row" id="input_pilgan`+count+`">
              <div class="col-12">
                  <div class="upload__img-wrap pilgan-img-wrap`+count+`"></div>
              </div>
              <div class="col-1 d-flex justify-content-center align-items-center">
                  <label class="form-check form-check-sm form-check-custom form-check-solid d-block">
                      <input class="form-check-input" type="radio">
                  </label>
              </div>
              <div class="col-9 ps-0">
                  <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                      <!--begin::Editor-->
                      <div id="kt_forms_widget_1_editor_tambahopsipilgan`+count+`" class="py-6"></div>
                      <!--end::Editor-->
                      <div class="separator"></div>
                      <!--begin::Toolbar-->
                      <div id="kt_forms_widget_1_editor_toolbar_tambahopsipilgan`+count+`" class="ql-toolbar d-flex flex-stack py-2">
                          <div class="me-2">
                              <span class="ql-formats ql-size ms-0">
                                  <select class="ql-size w-75px"></select>
                              </span>
                              <span class="ql-formats">
                                  <button class="ql-bold"></button>
                                  <button class="ql-italic"></button>
                                  <button class="ql-underline"></button>
                                  <button class="ql-strike"></button>
                                  <button class="ql-link"></button>
                                  <button class="ql-clean"></button>
                              </span>
                          </div>
                          <div class="me-n3">
                              <span class="btn btn-icon btn-sm btn-active-color-primary">
                                  <i class="flaticon2-clip-symbol icon-ms"></i>
                              </span>
                              <span class="btn btn-icon btn-sm btn-active-color-primary">
                                  <i class="flaticon2-pin icon-ms"></i>
                              </span>
                          </div>
                      </div>
                      <!--end::Toolbar-->
                  </form>
              </div>
              <div class="col-2 d-flex justify-content-center align-items-center">
                  <!-- Upload Image Soal -->
                      <div class="upload__box me-3">
                          <div class="upload__btn-box mb-0">
                              <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                                  <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                                  <input type="file" multiple="" data-max_length="20" class="upload__inputfile pilgan-input-file`+count+`">
                              </label>
                          </div>
                      </div>
                  <!-- Akhir Image Soal -->

                  <!-- Hapus Tambah Opsi -->
                      <button type="button" id="pilgan`+count+`" class="hapus_pilgan btn btn-icon btn-bg-light btn-active-color-primary">                                    
                          <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>                                
                      </button>
                  <!-- Akhir Hapus Tambah -->
              </div>
          </div>`;

	} else {
		field = `<div class="row" >
              <div class="col-12">
                  <div class="upload__img-wrap pilgan-img-wrap`+count+`"></div>
              </div>
              <div class="col-1 d-flex justify-content-center align-items-center">
                  <label class="form-check form-check-sm form-check-custom form-check-solid d-block">
                      <input class="form-check-input" type="radio">
                  </label>
              </div>
              <div class="col-10 ps-0">
                  <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                      <!--begin::Editor-->
                      <div id="kt_forms_widget_1_editor_jawabanpilgan" class="py-6"></div>
                      <!--end::Editor-->
                      <div class="separator"></div>
                      <!--begin::Toolbar-->
                      <div id="kt_forms_widget_1_editor_toolbar_jawabanpilgan" class="ql-toolbar d-flex flex-stack py-2">
                          <div class="me-2">
                              <span class="ql-formats ql-size ms-0">
                                  <select class="ql-size w-75px"></select>
                              </span>
                              <span class="ql-formats">
                                  <button class="ql-bold"></button>
                                  <button class="ql-italic"></button>
                                  <button class="ql-underline"></button>
                                  <button class="ql-strike"></button>
                                  <button class="ql-link"></button>
                                  <button class="ql-clean"></button>
                              </span>
                          </div>
                          <div class="me-n3">
                              <span class="btn btn-icon btn-sm btn-active-color-primary">
                                  <i class="flaticon2-clip-symbol icon-ms"></i>
                              </span>
                              <span class="btn btn-icon btn-sm btn-active-color-primary">
                                  <i class="flaticon2-pin icon-ms"></i>
                              </span>
                          </div>
                      </div>
                      <!--end::Toolbar-->
                  </form>
              </div>
              <div class="col-1  d-flex justify-content-center align-items-center">
                  <!-- Upload Image Soal -->
                  <div class="upload__box me-3">
                          <div class="upload__btn-box mb-0">
                              <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                                  <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                                  <input type="file" multiple="" data-max_length="20" class="upload__inputfile pilgan-input-file`+count+`">
                              </label>
                          </div>
                      </div>
                  <!-- Akhir Image Soal -->
              </div>
          </div>`;

        }

	$('#isi_pilgan').append(field);
  function ImgUploadPilgan() {
    var imgWrap = "";
    var imgArray = [];
  
    $('.pilgan-input-file'+count).each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.row').find('.pilgan-img-wrap'+count);
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
  ImgUploadPilgan();
}

function tambah_input_pilgankompleks(count) {
	var field = '';
	if (count > 1) {
		field = `  <div class="row" id="input_pilgankompleks`+count+`">
    <div class="col-12">
        <div class="upload__img-wrap pilgankompleks-img-wrap`+count+`"></div>
    </div>
    <div class="col-1 d-flex justify-content-center align-items-center">
        <label class="form-check form-check-sm form-check-custom form-check-solid d-block">
            <input class="form-check-input" type="checkbox">
        </label>
    </div>
    <div class="col-9 ps-0">
        <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
            <!--begin::Editor-->
            <div id="kt_forms_widget_1_editor_tambahopsipilgankompleks`+count+`" class="py-6"></div>
            <!--end::Editor-->
            <div class="separator"></div>
            <!--begin::Toolbar-->
            <div id="kt_forms_widget_1_editor_toolbar_tambahopsipilgankompleks`+count+`" class="ql-toolbar d-flex flex-stack py-2">
                <div class="me-2">
                    <span class="ql-formats ql-size ms-0">
                        <select class="ql-size w-75px"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                        <button class="ql-link"></button>
                        <button class="ql-clean"></button>
                    </span>
                </div>
                <div class="me-n3">
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="flaticon2-clip-symbol icon-ms"></i>
                    </span>
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="flaticon2-pin icon-ms"></i>
                    </span>
                </div>
            </div>
            <!--end::Toolbar-->
        </form>
    </div>
    <div class="col-2 d-flex justify-content-center align-items-center">
        <!-- Upload Image Soal -->
        <div class="upload__box me-3">
            <div class="upload__btn-box mb-0">
                <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                    <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile pilgankompleks-input-file`+count+`">
                </label>
            </div>
        </div>
        <!-- Akhir Image Soal -->

        <!-- Hapus Tambah Opsi -->
        <button type="button" id="pilgankompleks`+count+`" class="hapus_pilgankompleks btn btn-icon btn-bg-light btn-active-color-primary">
            <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>
        </button>
        <!-- Akhir Hapus Tambah -->
    </div>
</div>`;

	} else {
		field = `<div class="row">
    <div class="col-12">
        <div class="upload__img-wrap pilgankompleks-img-wrap`+count+`"></div>
    </div>
    <div class="col-1 d-flex justify-content-center align-items-center">
        <label class="form-check form-check-sm form-check-custom form-check-solid d-block">
            <input class="form-check-input" type="checkbox">
        </label>
    </div>
    <div class="col-10 ps-0">
        <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
            <!--begin::Editor-->
            <div id="kt_forms_widget_1_editor_jawabanpilgankompleks" class="py-6"></div>
            <!--end::Editor-->
            <div class="separator"></div>
            <!--begin::Toolbar-->
            <div id="kt_forms_widget_1_editor_toolbar_jawabanpilgankompleks" class="ql-toolbar d-flex flex-stack py-2">
                <div class="me-2">
                    <span class="ql-formats ql-size ms-0">
                        <select class="ql-size w-75px"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                        <button class="ql-link"></button>
                        <button class="ql-clean"></button>
                    </span>
                </div>
                <div class="me-n3">
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="flaticon2-clip-symbol icon-ms"></i>
                    </span>
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="flaticon2-pin icon-ms"></i>
                    </span>
                </div>
            </div>
            <!--end::Toolbar-->
        </form>
    </div>
    <div class="col-1  d-flex justify-content-center align-items-center">
        <!-- Upload Image Soal -->
        <div class="upload__box me-3">
            <div class="upload__btn-box mb-0">
                <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                    <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile pilgankompleks-input-file`+count+`">
                </label>
            </div>
        </div>
        <!-- Akhir Image Soal -->
    </div>
</div>`;

        }

	$('#isi_pilgankompleks').append(field);
  function ImgUploadPilgankompleks() {
    var imgWrap = "";
    var imgArray = [];
  
    $('.pilgankompleks-input-file'+count).each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.row').find('.pilgankompleks-img-wrap'+count);
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
  ImgUploadPilgankompleks();
}

function tambah_input_penjodohan(count) {
	var field = '';
	if (count > 1) {
		field = `      <div class="row" id="input_penjodohan`+count+`">
    <div class="col-12">
        <div class="upload__img-wrap penjodohan-img-wrap`+count+`"></div>
    </div>
    <div class="col-9 ps-0">
        <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
            <!--begin::Editor-->
            <div id="kt_forms_widget_1_editor_tambahopsipenjodohan`+count+`" class="py-6"></div>
            <!--end::Editor-->
            <div class="separator"></div>
            <!--begin::Toolbar-->
            <div id="kt_forms_widget_1_editor_toolbar_tambahopsipenjodohan`+count+`" class="ql-toolbar d-flex flex-stack py-2">
                <div class="me-2">
                    <span class="ql-formats ql-size ms-0">
                        <select class="ql-size w-75px"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                        <button class="ql-link"></button>
                        <button class="ql-clean"></button>
                    </span>
                </div>
                <div class="me-n3">
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="flaticon2-clip-symbol icon-ms"></i>
                    </span>
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="flaticon2-pin icon-ms"></i>
                    </span>
                </div>
            </div>
            <!--end::Toolbar-->
        </form>
    </div>
    <div class="col-3  d-flex justify-content-center align-items-center">
        <!-- Pilih Jawaban -->
        <div class="me-3">
            <select class="form-select form-select-solid" data-control="select2">
                <option></option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="2">C</option>
            </select>
        </div>
        <!-- Akhir Pilih Jawaban -->

        <!-- Upload Image Soal -->
        <div class="upload__box me-3">
            <div class="upload__btn-box mb-0">
                <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                    <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile penjodohan-input-file`+count+`">
                </label>
            </div>
        </div>
        <!-- Akhir Image Soal -->

        <!-- Hapus Tambah Opsi -->
        <button type="button" id="penjodohan`+count+`" class="hapus_penjodohan btn btn-icon btn-bg-light btn-active-color-primary">
            <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>
        </button>
        <!-- Akhir Hapus Tambah -->
    </div>
</div>`;

	} else {
		field = `<div class="row">
    <div class="col-12">
        <div class="upload__img-wrap penjodohan-img-wrap`+count+`"></div>
    </div>
    <div class="col-10 ps-0">
        <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
            <!--begin::Editor-->
            <div id="kt_forms_widget_1_editor_jawabanpenjodohan" class="py-6"></div>
            <!--end::Editor-->
            <div class="separator"></div>
            <!--begin::Toolbar-->
            <div id="kt_forms_widget_1_editor_toolbar_jawabanpenjodohan" class="ql-toolbar d-flex flex-stack py-2">
                <div class="me-2">
                    <span class="ql-formats ql-size ms-0">
                        <select class="ql-size w-75px"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                        <button class="ql-link"></button>
                        <button class="ql-clean"></button>
                    </span>
                </div>
                <div class="me-n3">
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="flaticon2-clip-symbol icon-ms"></i>
                    </span>
                    <span class="btn btn-icon btn-sm btn-active-color-primary">
                        <i class="flaticon2-pin icon-ms"></i>
                    </span>
                </div>
            </div>
            <!--end::Toolbar-->
        </form>
    </div>
    <div class="col-2  d-flex justify-content-center align-items-center">
        <!-- Pilih Jawaban -->
        <div class="me-3">
            <select class="form-select form-select-solid" data-control="select2">
                <option></option>
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="2">C</option>
            </select>
        </div>
        <!-- Akhir Pilih Jawaban -->
        <!-- Upload Image Soal -->
        <div class="upload__box">
            <div class="upload__btn-box mb-0">
                <label class="btn btn-icon btn-bg-light btn-active-color-primary upload__btn" style="min-width : 40px; min-height : 40px">
                    <i class="fa-duotone fa-images" style="font-size: 1.5rem;"></i>
                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile penjodohan-input-file`+count+`">
                </label>
            </div>
        </div>
        <!-- Akhir Image Soal -->
    </div>
</div>`;

        }

	$('#isi_penjodohan').append(field);
  function ImgUploadPenjodohan() {
    var imgWrap = "";
    var imgArray = [];
  
    $('.penjodohan-input-file'+count).each(function () {
      $(this).on('change', function (e) {
        imgWrap = $(this).closest('.row').find('.penjodohan-img-wrap'+count);
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
  ImgUploadPenjodohan();
}

function tambah_input_daftar(count) {


  reCalculate();
  var jml =$('.daftar').length;
  var jml = jml + 1;
	var field = '';
	if (count > 1) {
		field = `  <div class="row daftar" id="input_daftar`+count+`">
    <div class="d-flex mb-4">
        <div class="numbered d-flex justify center align-items-center fs-5 me-3">`+jml+`</div>
        <label class="form-check form-check-sm form-check-custom form-check-solid" style="width:100%;">
            <input type="text" class="form-control form-control form-control-solid me-3" placeholder="Daftar Jawaban">
        </label>
        <button id="daftar`+count+`" class="hapus_daftar btn btn-icon btn-bg-light btn-active-color-primary" style="width:60px;">
            <i class="fa-duotone fa-trash" style="font-size: 1.5rem;"></i>
        </button>
    </div>
</div>`;

	} else {
		field = ` <div class="row daftar">
    <div class="d-flex mb-4">
        <div class="numbered d-flex justify center align-items-center fs-5 me-3">1</div>
        <label class="form-check form-check-sm form-check-custom form-check-solid" style="width:100%;">
            <input type="text" class="form-control form-control form-control-solid me-3" placeholder="Daftar Jawaban">
        </label>
    </div>
</div>`;

        }

	$('#isi_daftar').append(field); 

}

$('#modal_soal').click(function() {
	$('#isi_pilgan').html('');
	tambah_input_pilgan(1);
  var quill = new Quill('#kt_forms_widget_1_editor_jawabanpilgan', {
    modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_jawabanpilgan"}},
    placeholder: 'Isikan jawaban soal',
    theme: 'snow' // or 'bubble'
});
});

$('#tab_pilgan').click(function() {
	$('#isi_pilgan').html('');
	tambah_input_pilgan(1);
  var quill = new Quill('#kt_forms_widget_1_editor_jawabanpilgan', {
    modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_jawabanpilgan"}},
    placeholder: 'Isikan jawaban soal',
    theme: 'snow' // or 'bubble'
});
});

$(document).on('click', '#tambah_pilgan_lagi', function() {
	count = count + 1;

	tambah_input_pilgan(count);
  var quill = new Quill('#kt_forms_widget_1_editor_tambahopsipilgan'+count, {
    modules: {toolbar: {container: '#kt_forms_widget_1_editor_toolbar_tambahopsipilgan'+count}},
    placeholder: 'Isikan jawaban soal',
    theme: 'snow' // or 'bubble'
});
});

$(document).on('click', '.hapus_pilgan', function() {

	var button_id = $(this).attr("id");
	$('#input_' + button_id).remove();
});



$('#tab_pilgankompleks').click(function() {
	$('#isi_pilgan').html('');
	$('#isi_pilgankompleks').html('');
	tambah_input_pilgankompleks(1);
  var quill = new Quill('#kt_forms_widget_1_editor_jawabanpilgankompleks', {
    modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_jawabanpilgankompleks"}},
    placeholder: 'Isikan jawaban soal',
    theme: 'snow' // or 'bubble'
});
});

$(document).on('click', '#tambah_pilgankompleks_lagi', function() {
	count = count + 1;

	tambah_input_pilgankompleks(count);
  var quill = new Quill('#kt_forms_widget_1_editor_tambahopsipilgankompleks'+count, {
    modules: {toolbar: {container: '#kt_forms_widget_1_editor_toolbar_tambahopsipilgankompleks'+count}},
    placeholder: 'Isikan jawaban soal',
    theme: 'snow' // or 'bubble'
});
});

$(document).on('click', '.hapus_pilgankompleks', function() {

	var button_id = $(this).attr("id");
	$('#input_' + button_id).remove();
});

$('#tab_penjodohan').click(function() {
	$('#isi_pilgan').html('');
	$('#isi_pilgankompleks').html('');
  $('#isi_penjodohan').html('');
  $('#isi_daftar').html('');

	tambah_input_penjodohan(1);
	tambah_input_daftar(1);
  var quill = new Quill('#kt_forms_widget_1_editor_jawabanpenjodohan', {
    modules: {toolbar: {container: "#kt_forms_widget_1_editor_toolbar_jawabanpenjodohan"}},
    placeholder: 'Isikan daftar pertanyaan',
    theme: 'snow' // or 'bubble'
});
});

$(document).on('click', '#tambah_penjodohan_lagi', function() {
	count = count + 1;

	tambah_input_penjodohan(count);


var quill = new Quill('#kt_forms_widget_1_editor_tambahopsipenjodohan'+count, {
    modules: {toolbar: {container: '#kt_forms_widget_1_editor_toolbar_tambahopsipenjodohan'+count}},
    placeholder: 'Isikan daftar pertanyaan',
    theme: 'snow' // or 'bubble'
});
});

$(document).on('click', '.hapus_penjodohan', function() {

	var button_id = $(this).attr("id");
	$('#input_' + button_id).remove();
});

$(document).on('click', '#tambah_daftar_lagi', function() {
	count = count + 1;
	tambah_input_daftar(count);
});

function reCalculate() {
  $('.daftar').each(function(i) {
    $(this).find('.numbered').text(i+1);
  });
}

$(document).on('click', '.hapus_daftar', function() {

	var button_id = $(this).attr("id");
	$('#input_' + button_id).remove();
  reCalculate();
});
