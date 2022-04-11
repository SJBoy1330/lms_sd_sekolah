function get_login(id) {
    var div = document.querySelector(id);
    var container_cabang = document.querySelector('#container_cabang');
    div.classList.remove('d-none');
    container_cabang.classList.add('d-none');
}

function back_to(element, id) {
    var container_cabang = document.querySelector(id);
    var id_div = $(element).data('div');
    var div_login = document.querySelector(id_div);
    container_cabang.classList.remove('d-none');
    div_login.classList.add('d-none');
}

function redirect_to(url) {
    window.location.href = url;
}