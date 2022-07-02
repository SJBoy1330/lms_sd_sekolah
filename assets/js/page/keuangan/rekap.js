setTimeout(function() {
  $('tr').each(function(i) {
      setTimeout(function() {
           $('tr').eq(i).addClass('fadein-left');
           $('tr').eq(i).css("opacity",1);
      }, 200 * i);
  });
}, 150 );
