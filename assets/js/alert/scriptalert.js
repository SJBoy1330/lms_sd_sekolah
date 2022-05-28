// console.log('nyambung bi');
var flashdata = [$('.flash-data').data('icon'), $('.flash-data').data('judul'), $('.flash-data').data('message'), $('.flash-data').data('image')];
// console.log(flashdata);
if (flashdata[0]) {
	Swal.fire({
		title: flashdata[1],
		html: flashdata[2],
		icon: flashdata[0],
		buttonsStyling: false,
		customClass: {
			confirmButton: "btn btn-primary"
		}
	});
}
if (flashdata[3]) {
	Swal.fire({
		title: flashdata[1],
		html: flashdata[2],
		imageUrl: flashdata[3],
		imageWidth: 100,
		imageHeight: 100,
		customClass: {
			confirmButton: "btn btn-primary"
		}
	})
}
$('.confirm_alert').on('click', function (e) {
	// console.log('ok');
	e.preventDefault();
	const href = $(this).attr('href');
	const title = $(this).data('judul');
	const message = $(this).data('message');
	const image = $(this).data('image');
	const icon = $(this).data('icon');

	if (image) {
		Swal.fire({
			title: title,
			text: message,
			imageUrl: image,
			imageWidth: 100,
			imageHeight: 100,
			customClass: {
				confirmButton: "btn btn-primary"
			}
		})
	} else {
		Swal.fire({
			title: title,
			text: message,
			icon: icon,
			customClass: {
				confirmButton: "btn btn-primary"
			}
		});
	}
});
$('.question_alert').on('click', function (e) {
	// console.log('ok');
	e.preventDefault();
	const href = $(this).attr('href');
	const title = $(this).data('judul');
	const message = $(this).data('message');
	const image = $(this).data('image');
	const icon = $(this).data('icon');

	if (image) {
		Swal.fire({
			title: title,
			text: message,
			imageUrl: image,
			imageWidth: 100,
			imageHeight: 100,
			showCancelButton: true,
			buttons: ["Stop", "Do it!"],
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya',
			customClass: {
				confirmButton: "btn btn-primary"
			}
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
			}
		})
	} else {
		Swal.fire({
			title: title,
			text: message,
			icon: icon,
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#969696',
			confirmButtonText: 'Ya',
			reverseButtons: true,
			customClass: {
				confirmButton: "btn btn-primary"
			}
		}).then((result) => {
			if (result.isConfirmed) {
				document.location.href = href;
			}
		})
	}
});