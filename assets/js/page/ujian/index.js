setTimeout(function() {
    $('.card-stretch').each(function(i) {
        setTimeout(function() {
             $('.card-stretch').eq(i).addClass('fadein-bottom');
        }, 150 * i);
    });
    $('.three-card').each(function(i) {
        setTimeout(function() {
            $('.three-card').eq(i).addClass('fadein-bottom');
        }, 150 * i);
    });
}, 150 );