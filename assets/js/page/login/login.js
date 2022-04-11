$(function(){
	$('#btn_login').on('click',function(){
		$.ajax({
			url:BASE_URL+'welcome/simpan_login',
			data : $('#form_login').serialize(),
			method:"POST",
			dataType : 'json',
			beforeSend : function(){
            	$('#btn_login').prop("disabled",true);
                $('#btn_login').html('<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>');
			},
			success:function(data)
			{
				$('.fadedin').remove();
				$('#btn_login').prop("disabled",false);
                $('#btn_login').html('<span class="indicator-label">Masuk</span>');;
				if(data.status == true){
					Swal.fire({
                        title : data.alert.title,
                        text: data.alert.text,
                        icon: data.alert.icon,
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        buttonsStyling: false,
                        customClass: {
                            confirmButton : 'btn btn-flex flex-center btn-default btn-lg mb-3 button-alert'
                        }
                    }).then(function() {
                    	if (data.redirect) {
                    		window.location = data.redirect;
                    	}else if(data.reload == true){
                    		location.reload()
                    	}else{

                    	}
                        
                    });
				}else{
					if (data.alert) {
						Swal.fire({
	                        title : data.alert.title,
	                        text: data.alert.text,
	                        icon: data.alert.icon,
	                        buttonsStyling: !1,
	                        confirmButtonText: "Ok",
	                        buttonsStyling: false,
	                        customClass: {
	                            confirmButton : 'btn btn-flex flex-center btn-default btn-lg mb-3 button-alert'
	                        }
	                    }).then(function() {
	                    	if (data.redirect) {
	                    		window.location = data.redirect;
	                    	}else if(data.reload == true){
	                    		location.reload()
	                    	}else{
	                    		
	                    	}
	                        
	                    });
					}else{
						if (data.required) {
							const array = data.required.length;
							for (var i = 0; i < array; i++) {
								$('#'+data.required[i][0]).append('<span class="text-danger fadedin">'+data.required[i][1]+'</span>');
							}
						}
					}
				}
			}
		});
		// $("input[name='nama_menu']").val("ok");
	});
});