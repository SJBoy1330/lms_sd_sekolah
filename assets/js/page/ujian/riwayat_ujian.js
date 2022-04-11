$(function(event){
	$('#filter_riwayat').on('change',function(){
		document.getElementById("form_riwayat").submit();
	})
		if (event.keyCode === 13) {
	    // Cancel the default action, if needed
	    event.preventDefault();
	    // Trigger the button element with a click
	    document.getElementById("basic-addon1").click();
	  }
	$('#basic-addon1').on('click',function(event) {
	    var value = $('#search').val();
	    var filter = $('#filter_riwayat').val();
	    if (value != '') {
	    	$.ajax({
		        type: "POST",
		        url: BASE_URL+'riwayat/search_riwayat',
		        data: {search : value,filter :filter},
		        cache : false,
		        beforeSend : function(){
		        	$('#menu_riwayat').html('<div class="spinner-border" role="status">\
  <span class="sr-only">Loading...</span>\
</div>');
		        },
		        success: function(msg) {
		           $('#menu_riwayat').html(msg);
		        }
		    });
	    }
	});
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
        //console.log($this.val());
        document.getElementById("form_riwayat").submit();
    });
  
    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});