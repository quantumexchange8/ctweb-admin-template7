@extends('Layouts.master')
@section('contents')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Email Compose</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                        <li class="breadcrumb-item active">Email Compose</li>
                    </ol>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="state-information d-none d-sm-block">
                    <div class="state-graph">
                <div id="header-chart-1" data-colors='["--bs-primary"]'></div>
                <div class="info">Balance $ 2,317</div>
            </div>
            <div class="state-graph">
                <div id="header-chart-2" data-colors='["--bs-info"]'></div>
                <div class="info">Item Sold 1,230</div>
            </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <!-- Left sidebar -->
                <div class="email-leftbar card">
                    <div class="d-grid">
                        <a href="email-compose.html" class="btn btn-danger rounded btn-custom waves-effect waves-light">Compose</a>
                    </div>
                    <div class="mail-list mt-3">
                        <a href="#" class="active">Inbox <span class="ms-1">(18)</span></a>
                        <a href="#">Starred</a>
                        <a href="#">Important</a>
                        <a href="#">Draft</a>
                        <a href="#">Sent Mail</a>
                        <a href="#">Trash</a>
                    </div>

                    <h5 class="mt-4">Labels</h5>

                    <div class="mail-list mt-3">
                        <a href="#"><span
                                class="mdi mdi-arrow-right-drop-circle text-info float-end mt-1 ms-2"></span>Theme
                            Support</a>
                        <a href="#"><span
                                class="mdi mdi-arrow-right-drop-circle text-warning float-end mt-1 ms-2"></span>Freelance</a>
                        <a href="#"><span
                                class="mdi mdi-arrow-right-drop-circle text-primary float-end mt-1 ms-2"></span>Social</a>
                        <a href="#"><span
                                class="mdi mdi-arrow-right-drop-circle text-danger float-end mt-1 ms-2"></span>Friends</a>
                        <a href="#"><span
                                class="mdi mdi-arrow-right-drop-circle text-success float-end mt-1 ms-2"></span>Family</a>
                    </div>

                    <h5 class="mt-4">Chat</h5>

                    <div class="mt-3">
                        <a href="#" class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <img class="rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="36">
                            </div>

                            <div class="flex-grow-1 chat-user-box">
                                <p class="user-title m-0">Scott Median</p>
                                <p class="text-muted">Hello</p>
                            </div>
                        </a>

                        <a href="#" class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <img class="rounded-circle" src="assets/images/users/user-3.jpg" alt="Generic placeholder image" height="36">
                            </div>
                            <div class="flex-grow-1 chat-user-box">
                                <p class="user-title m-0">Julian Rosa</p>
                                <p class="text-muted">What about our next..</p>
                            </div>
                        </a>

                        <a href="#" class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <img class="rounded-circle" src="assets/images/users/user-4.jpg" alt="Generic placeholder image" height="36">
                            </div>
                            <div class="flex-grow-1 chat-user-box">
                                <p class="user-title m-0">David Medina</p>
                                <p class="text-muted">Yeah everything is fine</p>
                            </div>
                        </a>

                        <a href="#" class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <img class="rounded-circle" src="assets/images/users/user-6.jpg" alt="Generic placeholder image" height="36">
                            </div>
                            <div class="flex-grow-1 chat-user-box">
                                <p class="user-title m-0">Jay Baker</p>
                                <p class="text-muted">Wow that's great</p>
                            </div>
                        </a>

                    </div>
                </div>
                <!-- End Left sidebar -->

                <!-- Right Sidebar -->
                <div class="email-rightbar mb-3">

                    <div class="card">
                        <div class="card-body">

                            <div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="To">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="mb-3">
                                    <form method="post">
                                        <textarea id="email-editor" name="area"></textarea>
                                    </form>
                                </div>

                                <div class="btn-toolbar form-group mb-0">
                                    <div class="">
                                        <button type="button" class="btn btn-success waves-effect waves-light me-1"><i
                                                class="far fa-save"></i></button>
                                        <button type="button" class="btn btn-success waves-effect waves-light me-1"><i
                                                class="far fa-trash-alt"></i></button>
                                        <button class="btn btn-primary waves-effect waves-light">
                                            <span>Send</span> <i class="fab fa-telegram-plane ms-2"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- end Col-9 -->

            </div>

        </div>
        <!-- End row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@section('scripts')
<!--tinymce js-->
<script src="assets/libs/tinymce/tinymce.min.js"></script>

<!-- email editor init -->
<script src="assets/js/pages/email-editor.init.js"></script>

<script>
    $('#header-chart-1').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
        type: 'bar',
        height: '32',
        barWidth: '5',
        barSpacing: '3',
        barColor: '#7A6FBE'
    });
    $('#header-chart-2').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
        type: 'bar',
        height: '32',
        barWidth: '5',
        barSpacing: '3',
        barColor: '#29bbe3'
    });
</script>
@endsection