setTimeout(function() {
    $('.box-identitas').each(function(i) {
        setTimeout(function() {
             $('.box-identitas').eq(i).addClass('fadein-right');
        }, 150 * i);
    });
  }, 150 );