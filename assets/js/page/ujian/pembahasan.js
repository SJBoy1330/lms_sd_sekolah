$(document).ready(function(){
	const html = document.querySelector('html');
    const body = document.querySelector('body');
    const id_ujian = $('#id_ujian').data('id');
    const id_soal = $('#id_ujian_detail').val();
    const first_number = $('#first_number').data('id');
    const last_number = $('#last_number').data('id');
    var ragu = document.querySelector('#ragu');
    var nda_ragu = document.querySelector('#nda_ragu'); 
	$('.nomor_soal').on('click',function(){
        html.classList.remove('menu-open');
        body.classList.remove('menu-open');
        var id = $(this).data('id');
        var ragu = $(this).data('ragu');
        const card_ujian = document.querySelector('#card-ujian-'+id);
        const card_ujian_aktif = document.querySelector('.active-card-ujian');
        $('#id_ujian_detail').val(id);
        if (last_number == id) {
            $('#next_button').prop('disabled',true);
        }else{
            $('#next_button').prop('disabled',false);
        }
        if (first_number == id) {
            $('#prev_button').prop('disabled',true);
        }else{
            $('#prev_button').prop('disabled',false);
        }

        card_ujian_aktif.classList.remove('active-card-ujian');
        card_ujian_aktif.classList.add('d-none');
        card_ujian.classList.add('active-card-ujian');
        card_ujian.classList.remove('d-none');  
    });



    $('#next_button').on('click',function(){
        var id = $('#id_ujian_detail').val();
        var number = Number(id) + 1;
        const card_ujian_aktif = document.querySelector('.active-card-ujian');
        if (id != last_number) {
           const card_ujian = document.querySelector('#card-ujian-'+number);

           $('#id_ujian_detail').val(number);
           if (last_number == number) {
                $('#next_button').prop('disabled',true);
            }else{
                $('#next_button').prop('disabled',false);
            }
            if (first_number == number) {
                $('#prev_button').prop('disabled',true);
            }else{
                $('#prev_button').prop('disabled',false);
            }
            card_ujian_aktif.classList.remove('active-card-ujian');
            card_ujian_aktif.classList.add('d-none');
            card_ujian.classList.add('active-card-ujian');
            card_ujian.classList.remove('d-none');   
        }
    });

    $('#prev_button').on('click',function(){
        var id = $('#id_ujian_detail').val();
        var number = Number(id) - 1;
        const card_ujian_aktif = document.querySelector('.active-card-ujian');

        if (id != first_number) {
            const card_ujian = document.querySelector('#card-ujian-'+number);
            if (last_number == number) {
                $('#next_button').prop('disabled',true);
            }else{
                $('#next_button').prop('disabled',false);
            }
            if (first_number == number) {
                $('#prev_button').prop('disabled',true);
            }else{
                $('#prev_button').prop('disabled',false);
            }

            $('#id_ujian_detail').val(number);
            card_ujian_aktif.classList.remove('active-card-ujian');
            card_ujian_aktif.classList.add('d-none');
            card_ujian.classList.add('active-card-ujian');
            card_ujian.classList.remove('d-none');   
        }
    });

});