var count = 1;
function tambah_input_instruksi(count) {
	var field = '';
	if (count > 1) {
		field = `<div class="row mb-5 pe-0" id="input_instruksi_` + count + `">
					<div class="col-11 " >
						<div class="position-relative d-flex align-items-center">
							<span class="svg-icon svg-icon-2 position-absolute mx-4">
								<i class="fa-duotone fa-layer-plus" style="font-size: 1.3rem;"></i>
							</span>
							<input class="form-control form-control-solid ps-12" placeholder="Masukkan list instruksi" />
						</div>
					</div>
					<div class="col-1 m-0 pe-0 d-flex text-end">
						<button id="instruksi_` + count + `" type="button" class="hapus_instruksi btn btn-md btn-bg-light btn-active-color-danger d-flex justify-content-center align-items-center me-3" style="width: 40px;">
							<span class="svg-icon svg-icon-3 ms-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
									<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
									<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
								</svg>
							</span>
						</button>
					</div>
				</div>`;
	} else {
		field = `<div class="col-12 mb-5 pe-0" id="input_instruksi_` + count + `">
					<div class="position-relative d-flex align-items-center">
						<span class="svg-icon svg-icon-2 position-absolute mx-4">
							<i class="fa-duotone fa-layer-plus" style="font-size: 1.3rem;"></i>
						</span>
						<input class="form-control form-control-solid ps-12" placeholder="Masukkan list instruksi" />
					</div>
				</div>`;
	}
	$('#input_instruksi').append(field);
}
$('#tambah_instruksi').click(function() {
	$('#input_instruksi').html('');
	$('#input_peraturan').html('');
	$("#label_tambah_peraturan").addClass('opacity-0').removeClass('opacity-1');
	$("#button_tambah_peraturan").addClass('d-none').removeClass('d-block');
	$("#button_buat_peraturan").text("Tambahkan Peraturan");
	$("#button_buat_peraturan").attr("onclick","buat_input_peraturan()");
	tambah_input_instruksi(1);
});

$(document).on('click', '#tambah_lagi', function() {
	count = count + 1;
	tambah_input_instruksi(count);
});

$(document).on('click', '.hapus_instruksi', function() {

	var button_id = $(this).attr("id");
	$('#input_' + button_id).remove();
});

function tambah_input_peraturan(count) {
	var field = '';
	if (count > 1) {
		field = `<div class="row mb-5" id="input_peraturan_` + count + `">
					<div class="col-11">
						<div class="position-relative d-flex align-items-center">
							<span class="svg-icon svg-icon-2 position-absolute mx-4">
								<i class="fa-duotone fa-layer-plus" style="font-size: 1.3rem;"></i>
							</span>
							<input class="form-control form-control-solid ps-12" placeholder="Masukkan list peraturan" />
						</div>
					</div>
					<div class="col-1 d-flex text-end">
						<button id="peraturan_` + count + `" type="button" class="hapus_peraturan btn btn-md btn-bg-light btn-active-color-danger d-flex justify-content-center align-items-center me-3" style="width: 40px;">
							<span class="svg-icon svg-icon-3 ms-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
									<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
									<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
								</svg>
							</span>
						</button>
					</div>
				</div>`;
	} else {
		field = `<div class="col-12 mb-5" id="input_peraturan_` + count + `">
					<div class="position-relative d-flex align-items-center">
						<span class="svg-icon svg-icon-2 position-absolute mx-4">
							<i class="fa-duotone fa-layer-plus" style="font-size: 1.3rem;"></i>
						</span>
						<input class="form-control form-control-solid ps-12" placeholder="Masukkan list peraturan" />
					</div>
				</div>`;
	}
	$('#input_peraturan').append(field);
}

function buat_input_peraturan(){
	$("#label_tambah_peraturan").addClass('opacity-1').removeClass('opacity-0');
	$("#button_tambah_peraturan").addClass('d-block').removeClass('d-none');
	$("#button_buat_peraturan").text("Batalkan");
	$("#button_buat_peraturan").attr("onclick","hilang_input_peraturan()");
	tambah_input_peraturan(1)
}

function hilang_input_peraturan(){
	$("#label_tambah_peraturan").addClass('opacity-0').removeClass('opacity-1');
	$("#button_tambah_peraturan").addClass('d-none').removeClass('d-block');
	$("#button_buat_peraturan").text("Tambahkan Peraturan");
	$("#button_buat_peraturan").attr("onclick","buat_input_peraturan()");
	$('#input_peraturan').empty();
}

$(document).on('click', '#button_tambah_peraturan', function() {
	count = count + 1;
	tambah_input_peraturan(count);
});

$(document).on('click', '.hapus_peraturan', function() {

	var button_id = $(this).attr("id");
	$('#input_' + button_id).remove();
});