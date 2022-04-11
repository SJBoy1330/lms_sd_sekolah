$(function(){
	// $('#pilih_filter').on('click',function(){
	// 	console.log('ook');
	// 	document.getElementById("filter_pelajaran").submit();
	// });


	$('.button-detail').on('click',function(){
		var id  = $(this).data('id');
		 $.ajax({
	        type: "POST",
	        url: BASE_URL+'laporan/detail_report',
	        data: {id : id},
	        cache : false,
	        beforeSend: function() {
	            $('#display_detail').html('<div class="spinner-border" role="status">\
				  <span class="sr-only">Loading...</span>\
				</div>')
	        },
	        success: function(msg) {
	           $('#display_detail').html(msg);
	        }
	    });
	});

	var $rows = $('#tabel_laporan .display');
	$('#search').keyup(function() {
	    
	    var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
	        reg = RegExp(val, 'i'),
	        text;
	    
	    $rows.show().filter(function() {
	        text = $(this).text().replace(/\s+/g, ' ');
	    	// console.log(reg.test(text));
	        return !reg.test(text);
	    }).hide();
	});


	 /*
Reference: http://jsfiddle.net/BB3JK/47/
*/
	$('select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;
  
    $this.addClass('select-hidden'); 
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    if (active == false) {
    	$styledSelect.text($this.children('option').eq(0).text());
    }else{
    	$styledSelect.text(active);
    }
    
  
    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);
  
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
        //if ($this.children('option').eq(i).is(':selected')){
        //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
        //}
    }
  
    var $listItems = $list.children('li');
  
    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });
  
    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        // console.log($this.val());
        document.getElementById("filter_pelajaran").submit();
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});
});

