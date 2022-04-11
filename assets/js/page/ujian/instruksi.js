$(function(){
	var loading_scene = new bootstrap.Modal(document.getElementById('loading_scene'), {})
	$('#mulai_ujian').on('click',function(){
		var id_paket = $('#access').val();
		console.log('mulai...');
		$.ajax({
	        type: "POST",
	        url: BASE_URL+'exam/register_ujian',
	        data: {id_paket_ujian : id_paket},
	        cache : false,
	        dataType : 'json',
	        beforeSend: function() {
    			loading_scene.show()
				$('#mulai_ujian').prop('disabled',true);
	        },
	        success: function(data) {
    			loading_scene.hide()
	        	$('#mulai_ujian').prop('disabled',false);
	        	if (data.console) {
	        		console.log(data.cosole);
	        	}
	           if(data.status == true){
	           	var icon = 'success';
	           		if (data.alert) {
	           			Swal.fire({
	                        title : data.alert.title,
	                        text: data.alert.text,
	                        icon: icon,
	                        buttonsStyling: !1,
	                        confirmButtonText: "Ok",
	                        customClass: {
	                            confirmButton: "btn btn-flex flex-center btn-default btn-lg mb-3 button-alert"
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
	           			if (data.redirect) {
							window.location = data.redirect;
						}else{
							location.reload()
						}
	           		}
					
				}else{
					var icon = 'warning';
					if (data.alert) {
						Swal.fire({
	                        title : data.alert.title,
	                        text: data.alert.text,
	                        icon: icon,
	                        buttonsStyling: !1,
	                        confirmButtonText: "Ok",
	                        customClass: {
	                            confirmButton: "btn btn-flex flex-center btn-default btn-lg mb-3 button-alert"
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
						if (data.redirect) {
							window.location = data.redirect;
						}else{
							location.reload()
						}
						
					}
				}
	        }
	    });
	});
});