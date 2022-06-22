
$('.clockpicker').clockpicker()
    .find('input').change(function(){
        console.log(this.value);
    });
    
$('#demo-input').clockpicker({
    autoclose: true
});

if (something) {
    $('#demo-input').clockpicker('show').clockpicker('toggleView', 'minutes');
}
