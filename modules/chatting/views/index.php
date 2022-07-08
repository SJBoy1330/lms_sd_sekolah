<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-lg-300px w-xl-400px mb-10 mb-lg-0">
                <!--begin::Contacts-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header pt-7" id="kt_chat_contacts_header">
                        <!--begin::Form-->
                        <div class="d-flex">
                            <form class="w-100 position-relative" autocomplete="off">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid px-15" name="search" value="" placeholder="Pencarian" />
                                <!--end::Input-->
                            </form>

                            <div class="tabcontent" id="personal">
                                <button type="button" class="btn btn-sm btn-success ms-10 rounded-circle d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#modalChatPersonal" style="width: 43px; height: 43px;">
                                    <span class="svg-icon svg-icon-1 ms-3 text-center">
                                        <i class="fa-duotone fa-message-lines" style="font-size: 1.4rem;"></i>
                                    </span>
                                </button>
                            </div>
                            
                            <div class="tabcontent" id="grup" style="display: none">
                                <button type="button" class="btn btn-sm btn-success ms-10 rounded-circle d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#modalKontakGrup" style="width: 43px; height: 43px;">
                                    <span class="svg-icon svg-icon-1 ms-3 text-center">
                                        <i class="fa-duotone fa-messages" style="font-size: 1.4rem;"></i>
                                    </span>
                                </button>
                            </div>

                        </div>

                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x my-3 fs-6 w-100 ">
                            <li class="nav-item w-50">
                                <a class="nav-link active text-center text-primary tablinks" onclick="contact(event, 'personal'); chat(event, 'personalchat') " data-bs-toggle="tab" href="#kt_tab_pane_1">Personal</a>
                            </li>
                            <li class="nav-item w-50">
                                <a class="nav-link text-center tablinks" onclick="contact(event, 'grup'); chat(event, 'grupchat')" data-bs-toggle="tab" href="#kt_tab_pane_2">Grup</a>
                            </li>
                        </ul>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-5 " id="kt_chat_contacts_body">

                        <div class="tab-content" id="myTabContent">
                            <!--begin::List-->

                            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px">
                                    <!--begin::User-->


                                    <div class="d-flex flex-stack py-4 ">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5 ">
                                                <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_1">Emmaaa</a>
                                                <div class="fw-bold text-muted">Selamat pagi bu emma, ijin...</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Lat seen-->
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">13.00</span>
                                        </div>
                                        <!--end::Lat seen-->
                                    </div>

                                    <div class="d-flex flex-stack py-4 ">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5 ">
                                                <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_1">Max Smith</a>
                                                <div class="fw-bold text-muted">Selamat pagi pak smith</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Lat seen-->
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">Kemarin</span>
                                        </div>
                                        <!--end::Lat seen-->
                                    </div>

                                    <div class="d-flex flex-stack py-4 ">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5 ">
                                                <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_1">Jhon Doe</a>
                                                <div class="fw-bold text-muted">Selamat pagi pak Jhon Doe</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Lat seen-->
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">01/01/2022</span>
                                        </div>
                                        <!--end::Lat seen-->
                                    </div>
                                    <!--end::User-->
                                </div>
                            </div>

                            <!--end::List-->

                            <div class="tab-pane fade show " id="kt_tab_pane_2" role="tabpanel">
                                <div class="scroll-y me-n5 pe-5 h-200px h-lg-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_contacts_header" data-kt-scroll-wrappers="#kt_content, #kt_chat_contacts_body" data-kt-scroll-offset="5px">

                                    <!--begin::User-->

                                    <div class="d-flex flex-stack py-4 ">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="assets/media/books/1.png" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5 ">
                                                <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_2">Grup Buku</a>
                                                <div class="fw-bold text-muted">Info!! grup</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Lat seen-->
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">13.00</span>
                                        </div>
                                        <!--end::Lat seen-->
                                    </div>

                                    <div class="d-flex flex-stack py-4 ">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="assets/media/books/2.png" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5 ">
                                                <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_2">Grup Siap Perang</a>
                                                <div class="fw-bold text-muted">Kapan nih acaranya</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Lat seen-->
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">Kemarin</span>
                                        </div>
                                        <!--end::Lat seen-->
                                    </div>

                                    <div class="d-flex flex-stack py-4 ">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-45px symbol-circle">
                                                <img alt="Pic" src="assets/media/books/3.png" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5 ">
                                                <a class=" fs-5 fw-bolder text-gray-900 text-hover-primary mb-2" data-bs-toggle="tab" href="#kt_tab_pane_chat_2">Grup Info Info</a>
                                                <div class="fw-bold text-muted">Info Info Info</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Lat seen-->
                                        <div class="d-flex flex-column align-items-end ms-2">
                                            <span class="text-muted fs-7 mb-1">01/01/2022</span>
                                        </div>
                                        <!--end::Lat seen-->
                                    </div>

                                    <!--end::User-->
                                </div>
                            </div>

                        </div>

                        <!--end::List-->

                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Contacts-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Content-->

            <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10" id="chatbox">
                <!--begin::Messenger-->

                <div class="tabchat" id="personalchat">
                    <div class="card" id="kt_chat_messenger">
                        <!--begin::Card header-->
                        <div class="card-header" id="kt_chat_messenger_header">
                            <!--begin::Title-->
                            <div class="card-title">
                                <!--begin::User-->
                                <div class="d-flex justify-content-center flex-column me-3">
                                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
                                    <!--begin::Info-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body tab-content position-relative" id="kt_chat_messenger_body">
                            <!--begin::Messages-->

                            <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px">
                                <!--begin::Message(in)-->
                                <div class="d-flex justify-content-start mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-3">
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                <span class="text-muted fs-7 mb-1">2 mins</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(in)-->
                                <!--begin::Message(out)-->
                                <div class="d-flex justify-content-end mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-end">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Details-->
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(out)-->
                                <!--begin::Message(in)-->
                                <div class="d-flex justify-content-start mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-3">
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(in)-->
                                <!--begin::Message(out)-->
                                <div class="d-flex justify-content-end mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-end">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Details-->
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(out)-->
                                <!--begin::Message(in)-->
                                <div class="d-flex justify-content-start mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-3">
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
                                            <a href="https://keenthemes.com">Keenthemes.com</a>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(in)-->
                                <!--begin::Message(out)-->
                                <div class="d-flex justify-content-end mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-end">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Details-->
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(out)-->
                                <!--begin::Message(in)-->
                                <div class="d-flex justify-content-start mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-3">
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(in)-->
                                <!--begin::Message(template for out)-->
                                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-end">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Details-->
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">Just now</span>
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"></div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(template for out)-->
                                <!--begin::Message(template for in)-->

                                <!--end::Message(template for in)-->
                            </div>


                            <div class="card w-100 position-absolute bottom-0 start-50 translate-middle-x" id="uploadboxpersonal" style="display: none;">
                                <form class="form w-100" action="#" method="post">
                                    <div class="fv-row">
                                        <div class="dropzone" id="kt_dropzonejs_example_1">
                                            <div class="dz-message needsclick">
                                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                    <span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="card w-100 position-absolute bottom-0 start-50 translate-middle-x" id="materiboxpersonal" style="display: none;">
                                <div class="card-header header-materi">
                                    <h5 class="card-title" id="materilabel">Materi pelajaran</h5>
                                </div>
                                <div class="card-body body-materi pt-0 ">
                                    <a class="list-group-item border-0 py-1 px-3 mb-1 " onclick="toBab()">
                                        <div class="row p-2">
                                            <div class="col align-self-center p-0">
                                                <p class="mb-0 fw-bold size-12">Pelajaran 1</p>
                                                <p class="size-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita id iure laudantium,
                                                    modi molestiae natus nesciunt nostrum praesentium quas, rem repellat, similique veniam
                                                    voluptate.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>


                            <!--end::Messages-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                            <!--begin::Input-->
                            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
                            <!--end::Input-->
                            <!--begin:Toolbar-->
                            <div class="nav d-flex flex-stack">
                                <!--begin::Actions-->
                                <div class="nav d-flex align-items-center me-2">
                                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" id="buttonMateriPersonal">
                                        <i class="bi bi-paperclip fs-3"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" id="buttonUploadPersonal">
                                        <i class="bi bi-upload fs-3"></i>
                                    </button>
                                </div>
                                <!--end::Actions-->
                                <!--begin::Send-->
                                <button class="btn btn-primary" type="button" data-kt-element="send">Kirim</button>
                                <!--end::Send-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card footer-->
                    </div>
                </div>
                <div class="tabchat" id="grupchat" style="display: none;">
                    <div class="card" id="kt_chat_grup">
                        <!--begin::Card header-->
                        <div class="card-header" id="kt_chat_messenger_header">
                            <!--begin::Title-->
                            <div class="card-title">
                                <div class="d-flex justify-content-center flex-column me-3">
                                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Grup Buku</a>
                                    <!--begin::Info-->
                                </div>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body position-relative" id="kt_chat_messenger_body">
                            <!--begin::Messages-->
                            <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px">
                                <!--begin::Message(in)-->
                                <div class="d-flex justify-content-start mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-3">
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                <span class="text-muted fs-7 mb-1">2 mins</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(in)-->
                                <!--begin::Message(out)-->
                                <div class="d-flex justify-content-end mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-end">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Details-->
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(out)-->
                                <!--begin::Message(in)-->
                                <div class="d-flex justify-content-start mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-3">
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(in)-->
                                <!--begin::Message(out)-->
                                <div class="d-flex justify-content-end mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-end">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Details-->
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(out)-->
                                <!--begin::Message(in)-->
                                <div class="d-flex justify-content-start mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-3">
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
                                            <a href="https://keenthemes.com">Keenthemes.com</a>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(in)-->
                                <!--begin::Message(out)-->
                                <div class="d-flex justify-content-end mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-end">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Details-->
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(out)-->
                                <!--begin::Message(in)-->
                                <div class="d-flex justify-content-start mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-3">
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(in)-->
                                <!--begin::Message(template for out)-->
                                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-end">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Details-->
                                            <div class="me-3">
                                                <span class="text-muted fs-7 mb-1">Just now</span>
                                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Text-->
                                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"></div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Message(template for out)-->
                                <!--begin::Message(template for in)-->

                                <!--end::Message(template for in)-->
                            </div>
                            <div class="card w-100 position-absolute bottom-0 start-50 translate-middle-x" id="uploadboxgrup" style="display: none;">
                                <form class="form w-100" action="#" method="post">
                                    <div class="fv-row">
                                        <div class="dropzone" id="kt_dropzonejs_example_1">
                                            <div class="dz-message needsclick">
                                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                    <span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="card w-100 position-absolute bottom-0 start-50 translate-middle-x" id="materiboxgrup" style="display: none;">
                                <div class="card-header header-materi">
                                    <h5 class="card-title" id="materilabel">Materi pelajaran</h5>
                                </div>
                                <div class="card-body body-materi pt-0 ">
                                    <a class="list-group-item border-0 py-1 px-3 mb-1 " onclick="toBab()">
                                        <div class="row p-2">
                                            <div class="col align-self-center p-0">
                                                <p class="mb-0 fw-bold size-12">Pelajaran 1</p>
                                                <p class="size-10">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita id iure laudantium,
                                                    modi molestiae natus nesciunt nostrum praesentium quas, rem repellat, similique veniam
                                                    voluptate.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Card body-->
                        <!--begin::Card footer-->
                        <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                            <!--begin::Input-->
                            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
                            <!--end::Input-->
                            <!--begin:Toolbar-->
                            <div class="d-flex flex-stack">
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center me-2">
                                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" id="buttonMateriGrup">
                                        <i class="bi bi-paperclip fs-3"></i>
                                    </button>
                                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" id="buttonUploadGrup">
                                        <i class="bi bi-upload fs-3"></i>
                                    </button>
                                </div>
                                <!--end::Actions-->
                                <!--begin::Send-->
                                <button class="btn btn-primary" type="button" data-kt-element="send">Kirim</button>
                                <!--end::Send-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card footer-->
                    </div>
                    <!--end::Messenger-->
                </div>

                <!--end::Messenger-->
            </div>


            <!--end::Content-->
        </div>
        <!--end::Layout-->
        <!--begin::Modals-->
        <!--begin::Modal - View Users-->
        <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                        <!--begin::Heading-->
                        <div class="text-center mb-13">
                            <!--begin::Title-->
                            <h1 class="mb-3">Browse Users</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-bold fs-5">If you need more info, please check out our
                                <a href="#" class="link-primary fw-bolder">Users Directory</a>.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Users-->
                        <div class="mb-15">
                            <!--begin::List-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Smith
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Art Director</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody Macy
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Analytic</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$50,500</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max Smith
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Software Enginer</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">max@kt.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$75,900</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean Bean
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Web Developer</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">sean@dellito.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$10,500</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian Cox
                                                <span class="badge badge-light fs-8 fw-bold ms-2">UI/UX Designer</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$20,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela Collins
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Head Of Marketing</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$9,300</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis Mitcham
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Software Arcitect</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$15,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia Wild
                                                <span class="badge badge-light fs-8 fw-bold ms-2">System Admin</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil Owen
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Account Manager</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$45,800</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan Wilson
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Web Desinger</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">dam@consilting.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$90,500</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma Bold
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Corporate Finance</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">emma@intenso.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$5,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana Crown
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Customer Relationship</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$70,000</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                                <!--begin::User-->
                                <div class="d-flex flex-stack py-5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-6">
                                            <!--begin::Name-->
                                            <a href="#" class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert Doe
                                                <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Executive</span></a>
                                            <!--end::Name-->
                                            <!--begin::Email-->
                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                            <!--end::Email-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Stats-->
                                    <div class="d-flex">
                                        <!--begin::Sales-->
                                        <div class="text-end">
                                            <div class="fs-5 fw-bolder text-dark">$45,500</div>
                                            <div class="fs-7 text-muted">Sales</div>
                                        </div>
                                        <!--end::Sales-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::List-->
                        </div>
                        <!--end::Users-->
                        <!--begin::Notice-->
                        <div class="d-flex justify-content-between">
                            <!--begin::Label-->
                            <div class="fw-bold">
                                <label class="fs-6">Adding Users by Team Members</label>
                                <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                <span class="form-check-label fw-bold text-muted">Allowed</span>
                            </label>
                            <!--end::Switch-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - View Users-->
        <!--begin::Modal - Users Search-->
        <div class="modal fade" id="modalChatPersonal" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                        <!--begin::Content-->
                        <div class="text-center mb-13">
                            <h1 class="mb-3">Cari Kontak</h1>
                        </div>
                        <!--end::Content-->
                        <!--begin::Search-->
                        <div data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                            <!--begin::Form-->
                            <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                <input type="hidden" />
                                <!--end::Hidden input-->
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Pencarian" data-kt-search-element="input" />
                                <!--end::Input-->
                                <!--begin::Spinner-->
                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                    <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                </span>
                                <!--end::Spinner-->
                                <!--begin::Reset-->
                                <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <!--end::Reset-->
                            </form>
                            <!--end::Form-->
                            <!--begin::Wrapper-->
                            <div class="py-5">
                                <!--begin::Suggestions-->
                                <div data-kt-search-element="suggestions">
                                    <!--end::Heading-->
                                    <!--begin::Users-->
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold d-flex flex-column">
                                                <span class="fs-6 text-gray-800 me-2">Emma</span>
                                                <span class="fw-bold text-muted">Guru Biologi</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/avatars/150-2.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold d-flex flex-column">
                                                <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                <span class="fw-bold text-muted">Guru Matematika</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/avatars/150-3.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold d-flex flex-column">
                                                <span class="fs-6 text-gray-800 me-2">Jhon Doe</span>
                                                <span class="fw-bold text-muted">Guru Ilmu Pengetahuan Sosial</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>
                                    </div>
                                    <!--end::Users-->
                                </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <div class="modal fade" id="modalKontakGrup" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                        <!--begin::Content-->
                        <div class="text-center mb-13">
                            <h1 class="mb-3">Cari Kontak Grup</h1>
                        </div>
                        <!--end::Content-->
                        <!--begin::Search-->
                        <div id="kt_modal_users_search_handler_grup" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                            <!--begin::Form-->
                            <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                <!--begin::Hidden input(Added to disable form autocomplete)-->
                                <input type="hidden" />
                                <!--end::Hidden input-->
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Pencarian" data-kt-search-element="input" />
                                <!--end::Input-->
                                <!--begin::Spinner-->
                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                    <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                </span>
                                <!--end::Spinner-->
                                <!--begin::Reset-->
                                <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <!--end::Reset-->
                            </form>
                            <!--end::Form-->
                            <!--begin::Wrapper-->
                            <div class="py-5">
                                <!--begin::Suggestions-->
                                <div data-kt-search-element="suggestions">
                                    <!--begin::Users-->
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/books/1.png" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold d-flex flex-column">
                                                <span class="fs-6 text-gray-800 me-2">Grup Buku</span>
                                                <span class="fw-bold text-muted">Emma</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/books/2.png" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold d-flex flex-column">
                                                <span class="fs-6 text-gray-800 me-2">Grup Siap Perang</span>
                                                <span class="fw-bold text-muted">Max Smith</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>

                                        <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle me-5">
                                                <img alt="Pic" src="assets/media/books/3.png" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Info-->
                                            <div class="fw-bold d-flex flex-column">
                                                <span class="fs-6 text-gray-800 me-2">Grup Siap Perang</span>
                                                <span class="fw-bold text-muted">Jhon DOe</span>
                                            </div>
                                            <!--end::Info-->
                                        </a>
                                    </div>
                                    <!--end::Users-->
                                </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Users Search-->
        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->