@extends('Layouts.master')
@section('contents')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Images</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                        <li class="breadcrumb-item active">Images</li>
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
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Image thumbnails</h4>
                        <p class="card-title-desc">In addition to our border-radius utilities, you can use
                            <code class="highlighter-rouge">.img-thumbnail</code> to give an image a rounded 1px border
                            appearance.
                        </p>

                        <div>
                            <img class="img-thumbnail" alt="200x200" width="200" src="assets/images/small/img-3.jpg"
                                data-holder-rendered="true">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Image Rounded & Circle</h4>
                        <p class="card-title-desc">Use classes
                            <code>.rounded</code> and <code>.rounded-circle</code>.
                        </p>

                        <div>
                            <img class="rounded me-4" alt="200x200" width="200" src="assets/images/small/img-4.jpg"
                                data-holder-rendered="true">
                            <img class="rounded-circle mt-4 mt-sm-0" alt="200x200" src="assets/images/users/user-4.jpg"
                                data-holder-rendered="true">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Responsive images</h4>
                        <p class="card-title-desc">Images in Bootstrap are made responsive with <code
                                class="highlighter-rouge">.img-fluid</code>. <code
                                class="highlighter-rouge">max-width: 100%;</code> and <code
                                class="highlighter-rouge">height: auto;</code> are applied to the image so that it
                            scales with the parent element.</p>

                        <div>
                            <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Image Sizes</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div>
                                            <img src="assets/images/users/user-3.jpg" alt="" class="rounded avatar-sm">
                                            <p class="mt-2 mb-lg-0"><code>.avatar-sm</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <img src="assets/images/users/user-4.jpg" alt="" class="rounded avatar-md">
                                            <p class="mt-2  mb-lg-0"><code>.avatar-md</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <img src="assets/images/users/user-5.jpg" alt="" class="rounded avatar-lg">
                                            <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div>
                                            <img src="assets/images/users/user-3.jpg" alt=""
                                                class="rounded-circle avatar-sm">
                                            <p class="mt-2 mb-lg-0"><code>.avatar-sm</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <img src="assets/images/users/user-4.jpg" alt=""
                                                class="rounded-circle avatar-md">
                                            <p class="mt-2  mb-lg-0"><code>.avatar-md</code></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <img src="assets/images/users/user-5.jpg" alt=""
                                                class="rounded-circle avatar-lg">
                                            <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@section('scripts')
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