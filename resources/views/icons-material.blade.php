@extends('Layouts.master')
@section('contents')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Material Design</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                        <li class="breadcrumb-item active">Material Design</li>
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

        <div class="row icons-demo-content">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">New Icons</h4>
                        <p class="card-title-desc mb-2">Use
                            <code>&lt;i class="mdi mdi-speedometer-slow"&gt;&lt;/i&gt;</code> <span
                                class="badge bg-success">v 5.8.55</span>.</p>

                        <div class="row icon-demo-content" id="newIcons"></div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">All Icons</h4>
                        <div class="row icon-demo-content" id="icons"></div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Size</h4>

                        <div class="row icon-demo-content">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-18px mdi-account"></i> mdi-18px
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-24px mdi-account"></i> mdi-24px
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-36px mdi-account"></i> mdi-36px
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-48px mdi-account"></i> mdi-48px
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Rotate</h4>

                        <div class="row icon-demo-content">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-rotate-45 mdi-account"></i> mdi-rotate-45
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-rotate-90 mdi-account"></i> mdi-rotate-90
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-rotate-135 mdi-account"></i> mdi-rotate-135
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-rotate-180 mdi-account"></i> mdi-rotate-180
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-rotate-225 mdi-account"></i> mdi-rotate-225
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-rotate-270 mdi-account"></i> mdi-rotate-270
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-rotate-315 mdi-account"></i> mdi-rotate-315
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Spin</h4>

                        <div class="row icon-demo-content">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-spin mdi-loading"></i> mdi-spin
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <i class="mdi mdi-spin mdi-star"></i> mdi-spin
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@section('scripts')
<!-- materialdesign icon js-->
<script src="assets/js/pages/materialdesign.init.js"></script>

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