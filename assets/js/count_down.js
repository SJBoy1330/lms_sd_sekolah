

$(document).ready(function () {
	var loading_scene = new bootstrap.Modal(document.getElementById('loading_scene'), {});
	const id_ujian = $('#id_ujian').data('id');
			String.prototype.toHHMMSS = function () {
			    var sec_num = parseInt(this, 10);
			    var hours   = Math.floor(sec_num / 3600);
			    var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
			    var seconds = sec_num - (hours * 3600) - (minutes * 60);

			    if (hours   < 10) {hours   = "0"+hours;}
			    if (minutes < 10) {minutes = "0"+minutes;}
			    if (seconds < 10) {seconds = "0"+seconds;}
			    return hours+':'+minutes+':'+seconds;
			}
			var sisa_detik = jam;
			setInterval(function(){
				sisa_detik = sisa_detik - 1;
				// console.log(sisa_detik);
				if(sisa_detik <= 0){
					$('#time_exam').html('00:00:00');
					clearInterval();
					loading_scene.show()
					document.location.href = BASE_URL+'exam/submit_jawaban/'+id_ujian+'/1';

				}else{
					$('#detik').val(sisa_detik);
					$('#time_exam').html($('#detik').val().toHHMMSS());
				}
			}, 1000);


		})