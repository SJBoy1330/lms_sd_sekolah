$(document).ready(function(){
	$('#submit_testimoni').on('click',function(){
		var star = $('#get_star').serialize();
		var message = $('#testimonial').val();
		// console.log(star);
		$.ajax({
            url : BASE_URL+'start/save_testimoni?'+star,
            method: 'post',
            data : {message : message},
            dataType : 'json',
            success: function(data){
                if (data.status == true) {
                	Swal.fire({
	                    title : 'PEMBERITAHUAN',
	                    text: 'Testimoni berhasil di kirim! terima kasih telah memberikan testimoni anda',
	                    icon: 'success',
	                    confirmButtonText: "Ok",
	                    customClass: {
                            confirmButton: "btn btn-flex flex-center btn-default btn-lg mb-3 button-alert"
	                    }
	                }).then(function() {
	                   	window.location = BASE_URL+'riwayat';  
	                });
                }else{
                	Swal.fire({
	                    title : 'PERINGATAN',
	                    text: data.message,
	                    icon: 'warning',
	                    confirmButtonText: "Ok",
	                    customClass: {
                            confirmButton: "btn btn-flex flex-center btn-default btn-lg mb-3 button-alert"
	                    }
	                });
                }
            }                
        });
	});
});