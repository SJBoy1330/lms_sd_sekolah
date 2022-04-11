$(document).ready(function(){
    var alertModal = new bootstrap.Modal(document.getElementById('alertModal'), {});
    var loading_scene = new bootstrap.Modal(document.getElementById('loading_scene'), {});
    const id_ujian = $('#id_ujian').data('id');
    const id_soal = $('#id_ujian_detail').val();
    const first_number = $('#first_number').data('id');
    const last_number = $('#last_number').data('id');
    const html = document.querySelector('html');
    const body = document.querySelector('body');
    var ragu = document.querySelector('#ragu');
    var nda_ragu = document.querySelector('#nda_ragu'); 
    $('.nomor_soal').on('click',function(){
        html.classList.remove('menu-open');
        body.classList.remove('menu-open');
        var id = $(this).data('id');
        const card_ujian = document.querySelector('#card-ujian-'+id);
        const card_ujian_aktif = document.querySelector('.active-card-ujian');
         $.ajax({
            url : BASE_URL+'exam/get_exam_by_number',
            method: 'POST',
            data : {id : id,id_ujian : id_ujian},
            cache : false,
            dataType : 'json',
            beforeSend : function(){
                $('#ragu').html('<div class="spinner-border text-warning" role="status"><span class="sr-only"></span></div>');
                $('#nda_ragu').html('<div class="spinner-border text-white" role="status"><span class="sr-only"></span></div>');
            },
            success: function(data){
                $('#ragu').html('Ragu Ragu');
                $('#nda_ragu').html('Ragu Ragu');
                if (data.status == true) {
                    if (last_number == data.id_soal) {
                                $('#next_button').prop('disabled',true);
                            }else{
                                $('#next_button').prop('disabled',false);
                            }
                            if (first_number == data.id_soal) {
                                $('#prev_button').prop('disabled',true);
                            }else{
                                $('#prev_button').prop('disabled',false);
                            }
                    $('#id_ujian_detail').val(id);
                    card_ujian_aktif.classList.remove('active-card-ujian');
                    card_ujian_aktif.classList.add('d-none');
                    card_ujian.classList.add('active-card-ujian');
                    card_ujian.classList.remove('d-none');
                    if (data.ragu == true) {
                        ragu.classList.add('d-none');
                        nda_ragu.classList.remove('d-none');
                    }else{
                        ragu.classList.remove('d-none');
                        nda_ragu.classList.add('d-none');
                    }
                }else{
                    console.log('gagal');
                }
            }                
        }); 
         
         
    });

    $('#next_button').on('click',function(){
        var id = $('#id_ujian_detail').val();
        const card_ujian_aktif = document.querySelector('.active-card-ujian');
        if (id != last_number) {
            $('#next_button').prop('disabled',false);
            $.ajax({
                url : BASE_URL+'exam/get_exam_by_number/next',
                method: 'post',
                data : {id : id,id_ujian : id_ujian,first_number : first_number, last_number : last_number},
                cache : false,
                dataType : 'json',
                beforeSend : function(){
                    $('#ragu').html('<div class="spinner-border text-warning" role="status"><span class="sr-only"></span></div>');
                    $('#nda_ragu').html('<div class="spinner-border text-white" role="status"><span class="sr-only"></span></div>');
                },
                success: function(data){
                    $('#ragu').html('Ragu Ragu');
                    $('#nda_ragu').html('Ragu Ragu');
                        if (data.status == true) {
                            $('#id_ujian_detail').val(data.id_soal);
                            const card_ujian = document.querySelector('#card-ujian-'+data.id_soal);
                            card_ujian_aktif.classList.remove('active-card-ujian');
                            card_ujian_aktif.classList.add('d-none');
                            card_ujian.classList.add('active-card-ujian');
                            card_ujian.classList.remove('d-none');
                            if (last_number == data.id_soal) {
                                $('#next_button').prop('disabled',true);
                            }else{
                                $('#next_button').prop('disabled',false);
                            }
                            if (first_number == data.id_soal) {
                                $('#prev_button').prop('disabled',true);
                            }else{
                                $('#prev_button').prop('disabled',false);
                            }
                            if (data.ragu == true) {
                                ragu.classList.add('d-none');
                                nda_ragu.classList.remove('d-none');
                            }else{
                                ragu.classList.remove('d-none');
                                nda_ragu.classList.add('d-none');
                            }
                        }else{
                            console.log('gagal');
                        }
                } 
            });    
        }
    });

    $('#prev_button').on('click',function(){
        var id = $('#id_ujian_detail').val();
        const card_ujian_aktif = document.querySelector('.active-card-ujian');

        if (id != first_number) {
            $.ajax({
                url : BASE_URL+'exam/get_exam_by_number/prev',
                method: 'post',
                data : {id : id,id_ujian : id_ujian,first_number : first_number, last_number : last_number},
                cache : false,
                dataType : 'json',
                beforeSend : function(){
                    $('#ragu').html('<div class="spinner-border text-warning" role="status"><span class="sr-only"></span></div>');
                    $('#nda_ragu').html('<div class="spinner-border text-white" role="status"><span class="sr-only"></span></div>');
                },
                success: function(data){
                    $('#ragu').html('Ragu Ragu');
                    $('#nda_ragu').html('Ragu Ragu');
                        if (data.status == true) {
                            if (last_number == data.id_soal) {
                                $('#next_button').prop('disabled',true);
                            }else{
                                $('#next_button').prop('disabled',false);
                            }
                            if (first_number == data.id_soal) {
                                $('#prev_button').prop('disabled',true);
                            }else{
                                $('#prev_button').prop('disabled',false);
                            }
                            $('#id_ujian_detail').val(data.id_soal);
                            const card_ujian = document.querySelector('#card-ujian-'+data.id_soal);
                            card_ujian_aktif.classList.remove('active-card-ujian');
                            card_ujian_aktif.classList.add('d-none');
                            card_ujian.classList.add('active-card-ujian');
                            card_ujian.classList.remove('d-none');
                            if (data.ragu == true) {
                                ragu.classList.add('d-none');
                                nda_ragu.classList.remove('d-none');
                            }else{
                                ragu.classList.remove('d-none');
                                nda_ragu.classList.add('d-none');
                            }
                        }else{
                            console.log('gagal');
                        }
                } 
            });    
        }
    });

    // BUTTON RAGU
    $('#ragu').on('click',function(){
        var id = $('#id_ujian_detail').val();
        $.ajax({
            url : BASE_URL+'exam/ragu/Y',
            method: 'post',
            data : {id_ujian : id_ujian},
            dataType : 'json',
            success: function(data){
                if (data.status == true) {
                    ragu.classList.add('d-none');
                    nda_ragu.classList.remove('d-none');
                    nomor = document.querySelector('#nomor-'+id);
                    if (data.jawaban == true) {
                        nomor.classList.add('kotak-ragu');
                         nomor.classList.remove('kotak-jawab');
                    }else{
                        nomor.classList.add('kotak-ragu');
                        nomor.classList.remove('kotak');
                    };
                }
            }                
        }); 
    });

    // BUTTON NDA RAGU
    $('#nda_ragu').on('click',function(){
        var id = $('#id_ujian_detail').val();
        $.ajax({
            url : BASE_URL+'exam/ragu/N',
            method: 'post',
            data : {id_ujian : id_ujian},
            dataType : 'json',
            success: function(data){
                if (data.status == true) {
                    ragu.classList.remove('d-none');
                    nda_ragu.classList.add('d-none');
                    nomor = document.querySelector('#nomor-'+id);
                    if (data.jawaban == true) {
                        nomor.classList.remove('kotak-ragu');
                         nomor.classList.add('kotak-jawab');
                    }else{
                        nomor.classList.remove('kotak-ragu');
                        nomor.classList.add('kotak');
                    }
                }
            }                
        }); 
    });

    // BATAL SUBMIT
    $('#button_batal').on('click',function(){
        $('#submit_jawaban').prop('disabled',false);
    });
        // CEK JAWABAN
    $('#submit_jawaban').on('click',function(){
        $.ajax({
            url : BASE_URL+'exam/cek_jawaban_ujian',
            method: 'post',
            data : {id_ujian : id_ujian},
            dataType : 'json',
            beforeSend: function(){
                $('#submit_jawaban').prop('disabled',true);
                loading_scene.show()
            },
            success: function(data){
                $('#submit_jawaban').prop('disabled',true);
                loading_scene.hide()
                alertModal.show();
                if (data.status == true) {
                    $('#text_submit').html("Pastikan jawaban anda sudah terisi semua dengan benar");
                }else{
                    if (data.jmlh_kosong > 0) {
                        if (data.jmlh_ragu) {
                            var message = '(Terdapat '+data.jmlh_ragu+' soal ragu-ragu dan '+data.jmlh_kosong+' soal kosong)';
                        }else{
                            var message = '(Terdapat '+data.jmlh_kosong+' soal kosong)';
                        }
                    }else{
                        if (data.jmlh_ragu) {
                            var message = '(Terdapat '+data.jmlh_ragu+' soal ragu-ragu)';
                        }else{
                            var message = 'Pastikan jawaban anda sudah terisi semua dengan benar';
                        }
                    } 
                    $('#text_submit').html(message);
                }
            }                
        }); 
    });


    // SUBMIT SOAL
    $('#button_yakin').on('click',function(){
        $.ajax({
            url : BASE_URL+'exam/submit_jawaban/'+id_ujian,
            method: 'post',
            dataType : 'json',
            beforeSend: function(){
                loading_scene.show();
                alertModal.hide();
            },
            success: function(data){
                document.location.href = data.redirect;
            }   
        });
    });



    // LOAD AJAX SOAL

    // SOAL PILIHAN GANDA
    $('.pilgan').on('click',function(){
        var value = $(this).val();
        const id = $('#id_ujian_detail').val();
        $.ajax({
            url : BASE_URL+'exam/pilgan_save',
            method: 'post',
            data : {id_ujian : id_ujian,jawab : value},
            dataType : 'json',
            success: function(data){
                // console.log(data.ragu);
                 nomor = document.querySelector('#nomor-'+data.id_soal);
                if (data.ragu == true) {
                    $('#nomor_soal_'+id).attr('style','color : #FFFFFF');
                    nomor.classList.add('kotak-ragu');
                }else{
                    if (data.status == true) {
                        $('#nomor_soal_'+id).attr('style','color : #FFFFFF');
                        nomor.classList.add('kotak-jawab');
                        nomor.classList.remove('kotak');
                    }else{
                        $('#nomor_soal_'+id).attr('style','color : #000000');
                        nomor.classList.add('kotak');
                    }
                }
            }                
        }); 
    });

    // SOAL MULTIPLE PILIHAN GANDA
    $('.val_check').on('change',function(){
        const id = $('#id_ujian_detail').val();
        var value = $('#soal_check_'+id).serialize();
        $.ajax({
            url : BASE_URL+'exam/multiple_pilgan_save?'+value,
            method: 'post',
            data : {id_soal : id,id_ujian : id_ujian},
            dataType : 'json',
            success: function(data){
                nomor = document.querySelector('#nomor-'+id);
                if (data.ragu == true) {
                    $('#nomor_soal_'+id).attr('style','color : #FFFFFF');
                    nomor.classList.add('kotak-ragu');
                }else{
                    if (data.status == true) {
                        $('#nomor_soal_'+id).attr('style','color : #FFFFFF');
                        nomor.classList.add('kotak-jawab');
                        nomor.classList.remove('kotak');
                    }else{
                        $('#nomor_soal_'+id).attr('style','color : #000000');
                        nomor.classList.add('kotak');
                    }
                }
            }                
        }); 
    });

    // SOAL ESSAI
    $('.essai').on('blur',function(){
        const id = $('#id_ujian_detail').val();
        let userData = $('#essai-'+id).val();
        if(userData){
            var value = userData;
        }else{
            var value = null;
        }
        $.ajax({
            url : BASE_URL+'exam/essai_save',
            method: 'post',
            data : {id_soal : id,id_ujian : id_ujian,jawab : value},
            dataType : 'json',
            success: function(data){
                nomor = document.querySelector('#nomor-'+id);
                if (data.ragu == true) {
                    $('#nomor_soal_'+id).attr('style','color : #FFFFFF');
                    nomor.classList.add('kotak-ragu');
                }else{
                    if (data.status == true) {
                        $('#nomor_soal_'+id).attr('style','color : #FFFFFF');
                        nomor.classList.add('kotak-jawab');
                        nomor.classList.remove('kotak');
                    }else{
                        $('#nomor_soal_'+id).attr('style','color : #000000');
                       nomor.classList.add('kotak');
                    }
                }
            }                
        }); 
    });

    // SOAL PENJODOHAN
    $('.penjodohan').on('change',function(){
        const id = $('#id_ujian_detail').val();
        var value = $('#form_penjodohan_'+id).serialize();
        // console.log(value);
        $.ajax({
            url : BASE_URL+'exam/penjodohan_save?'+value,
            method: 'post',
            data : {id_soal : id,id_ujian : id_ujian},
            dataType : 'json',
            success: function(data){
                 nomor = document.querySelector('#nomor-'+id);
                if (data.ragu == true) {
                    nomor.classList.add('kotak-ragu');
                }else{
                    if (data.status == true) {
                        nomor.classList.add('kotak-jawab');
                        nomor.classList.remove('kotak');
                    }else{
                        nomor.classList.add('kotak');
                    }
                }
            }                
        }); 
    });


});