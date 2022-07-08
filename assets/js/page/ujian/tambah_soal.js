function menambah_inputan() {
    //menghitung jumlah inputan
    var jumlah_anak = $("#parent").find("div").length;
    var jmlh = jumlah_anak + 1;
    $('#parent').append('<div id="inputan_' + jmlh + '">\
        <li class="list-group-item p-4 bg-light-success" style="cursor : default;">\
            <div class="row">\
                <div class="col-12 d-flex justify-content-between align-items-center">\
                    <span class="badge badge-success me-2">Uraian Panjang</span>\
                </div>\
            </div>\
            <div class="row mt-5">\
                <div class="col-12 col-md-12 col-lg-12">\
                    <figure class="ms-2 mb-3" style="background-repeat: no-repeat; background-size: cover; position: relative;  height:125px; width:125px;"></figure>\
                    <p class="ms-2 mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non provident, officiis illo blanditiis pariatur repellendus. Vel odit repellat, mollitia facere commodi qui? Reprehenderit harum beatae culpa. At assumenda adipisci sint. ?</p>\
                </div>\
            </div>\
        </li>\
</div>')
}