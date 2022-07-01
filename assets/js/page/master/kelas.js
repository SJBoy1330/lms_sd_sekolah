$(function() {
    $("#kt_table_kelas").on("click", function() {
        $("#deleteall").toggle($(this).find(".deletebox:checked").length > 0);
        if($(this).find(".deletebox:checked").length < ($(this).find(".deletebox").length)){
            $('input[name="maincheckbox"]').prop('checked', false);
        }else if($(this).find(".deletebox:checked").length = ($(this).find(".deletebox").length)){
            $('input[name="maincheckbox"]').prop('checked', true);
        }
    })
    $('input[name="maincheckbox"]').on("click", function() {
        $('.deletebox').prop('checked', this.checked);
    });

});

setTimeout(function() {
    $('tr').each(function(i) {
        setTimeout(function() {
             $('tr').eq(i).addClass('fadein-left');
        }, 200 * i);
    });
}, 150 );

var inputElm = document.querySelector('#kt_tagify_users');

const usersList = [
    { value: 1, name: 'Emma Smith', avatar: `avatars/150-1.jpg`, email: 'e.smith@kpmg.com.au' },
    { value: 2, name: 'Max Smith', avatar: `avatars/150-26.jpg`, email: 'max@kt.com' },
    { value: 3, name: 'Sean Bean', avatar: `avatars/150-4.jpg`, email: 'sean@dellito.com' },
    { value: 4, name: 'Brian Cox', avatar: `avatars/150-15.jpg`, email: 'brian@exchange.com' },
    { value: 5, name: 'Francis Mitcham', avatar: `avatars/150-8.jpg`, email: 'f.mitcham@kpmg.com.au' },
    { value: 6, name: 'Dan Wilson', avatar: `avatars/150-6.jpg`, email: 'dam@consilting.com' },
    { value: 7, name: 'Ana Crown', avatar: `avatars/150-7.jpg`, email: 'ana.cf@limtel.com' },
    { value: 8, name: 'John Miller', avatar: `avatars/150-17.jpg`, email: 'miller@mapple.com' }
];

function tagTemplate(tagData) {
    return `
        <tag title="${(tagData.title || tagData.email)}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div class="d-flex align-items-center">
                <div class='tagify__tag__avatar-wrap ps-0'>
                    <img onerror="this.style.visibility='hidden'" class="rounded-circle w-25px me-2" src="${BASE_URL}/assets/media/${tagData.avatar}">
                </div>
                <span class='tagify__tag-text'>${tagData.name}</span>
            </div>
        </tag>
    `
}

function suggestionItemTemplate(tagData) {
    return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item d-flex align-items-center ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">

            ${tagData.avatar ? `
                    <div class='tagify__dropdown__item__avatar-wrap me-2'>
                        <img onerror="this.style.visibility='hidden'"  class="rounded-circle w-50px me-2" src="${BASE_URL}/assets/media/${tagData.avatar}">
                    </div>` : ''
                }

            <div class="d-flex flex-column">
                <strong>${tagData.name}</strong>
                <span>${tagData.email}</span>
            </div>
        </div>
    `
}

// create a "add all" custom suggestion element every time the dropdown changes
function getAddAllSuggestionsElm() {
    // suggestions items should be based on "dropdownItem" template
    return tagify.parseTemplate('dropdownItem', [{
        class: "addAll",
        name: "Tambah Semua",
        email: tagify.settings.whitelist.reduce(function (remainingSuggestions, item) {
            return tagify.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
        }, 0) + " Siswa"
    }]
    )
}

$(document).ready(function () {
    $('#btn-filter').on('click', function () {
        let redirect = `${BASE_URL}/master/kelas`;

        let tahun_ajaran = $('#select_tahun_ajaran option:selected').val();
        if (tahun_ajaran !== null && tahun_ajaran !== "") {
            redirect = redirect + "?" + `tahun_ajaran=${tahun_ajaran}`;
        }

        location.href = redirect;
    });

    $('.btn-tambah-edit-modal-kelas').on('click', function () {

        let idkelas = $(this).data('idkelas');

        $.ajax({
            url: `${BASE_URL}/master/modal_edit_tambah_kelas`,
            method: "POST",
            data: {
                id_kelas: idkelas
            },
            beforeSend: function () {
                $('#content-edit-tambah-kelas').html(null);
            },
            success: function (data) {
                $('#content-edit-tambah-kelas').html(data);
            }
        });
    });

    $('.btn-hapus-kelas').on('click', function () {

        let idkelas = $(this).data('idkelas');
        let idstaf = $(this).data('idstaf');

        console.log("idkelas", idkelas);
        console.log("idstaf", idstaf);

        $.ajax({
            url: `${BASE_URL}/func_master/hapus_kelas`,
            method: "POST",
            data: {
                id_kelas: idkelas,
                id_staf: idstaf
            },
            beforeSend: function () {
                $(this).prop('disabled', true);
            },
            success: function (data) {
                $(this).prop('disabled', false);
                data = JSON.parse(data);

                if (data.status == true) {
                    var icon = 'success';
                } else {
                    var icon = 'warning';
                }

                Swal.fire({
                    title: data.alert.title,
                    text: data.alert.message,
                    icon: icon,
                    buttonsStyling: !1,
                    confirmButtonText: "Ok",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(function () {
                    location.href = data.redirect;
                });
            }
        });
    });
});
