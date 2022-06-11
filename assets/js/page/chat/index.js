function contact(evt, contact) {
    var i, tabcontent, tablinks;
  
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" text-primary", " ");
    }
    document.getElementById(contact).style.display = "block";
    evt.currentTarget.className += " text-primary";

    $("#uploadboxpersonal"). css("display", "none");
    $("#materiboxpersonal"). css("display", "none");
    $("#uploadboxgrup"). css("display", "none");
    $("#materiboxgrup"). css("display", "none");
}

function chat(evt, chat) {
    var i, tabcontent, tablinks;
    
    tabcontent = document.getElementsByClassName("tabchat");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
  
    document.getElementById(chat).style.display = "block";

}

var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    accept: function(file, done) {
        if (file.name == "wow.jpg") {
            done("Naha, you don't.");
        } else {
            done();
        }
    }
});


jQuery("#buttonUploadPersonal").click(function(){
    $("#materiboxpersonal"). css("display", "none");
    jQuery("#uploadboxpersonal").toggle();
});

jQuery("#buttonMateriPersonal").click(function(){
    $("#uploadboxpersonal"). css("display", "none");
    jQuery("#materiboxpersonal").toggle();
});

jQuery("#buttonUploadGrup").click(function(){
    $("#materiboxgrup"). css("display", "none");
    jQuery("#uploadboxgrup").toggle();
});

jQuery("#buttonMateriGrup").click(function(){
    $("#uploadboxgrup"). css("display", "none");
    jQuery("#materiboxgrup").toggle();
});

function toPelajaran(){
    $('.header-materi').html(`   <h5 class="card-title">Materi pelajaran</h5>`);
    $('.body-materi').html(`<a class="list-group-item border-0  py-1 px-3 mb-1 " onclick="toBab()">
            <div class="row p-2">
                <div class="col align-self-center p-0">
                    <p class="mb-0 fw-bold size-12">Pelajaran 1</p>
                    <p class=" size-10">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita id iure laudantium, modi molestiae natus nesciunt nostrum praesentium quas, rem repellat, similique veniam voluptate.
                    </p>
                </div>
            </div>
        </a>`);
}
function toBab() {
    $('.header-materi').html(`<h5 class="card-title"><span class="px-2" onclick="toPelajaran()"><i class="bi bi-arrow-left"></i></span>Materi pelajaran</h5>`);
    $('.body-materi').html(`<a class="list-group-item border-0  py-1 px-3 mb-1 " onclick="toMateri()">
            <div class="row p-2">
                <div class="col align-self-center p-0">
                    <p class="mb-0 fw-bold size-12">Bab 1</p>
                    <p class=" size-10">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita id iure laudantium, modi molestiae natus nesciunt nostrum praesentium quas, rem repellat, similique veniam voluptate.
                    </p>
                </div>
            </div>
        </a>`);
}

function toMateri() {
    $('.header-materi').html(`<h5 class="card-title"><span class="px-2" onclick="toBab()"><i class="bi bi-arrow-left"></i></span>Materi pelajaran</h5></button>`);
    $('.body-materi').html(`<a class="list-group-item border-0  py-1 px-3 mb-1 ">
            <div class="row p-2">
                <div class="col align-self-center p-0">
                    <p class="mb-0 fw-bold size-12">Materi</p>
                    <p class=" size-10">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita id iure laudantium, modi molestiae natus nesciunt nostrum praesentium quas, rem repellat, similique veniam voluptate.
                    </p>
                </div>
            </div>
        </a>`);
}
