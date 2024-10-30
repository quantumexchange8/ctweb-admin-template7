@extends('Layouts.master')
@section('contents')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Flot Chart</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                        <li class="breadcrumb-item active">Flot Chart</li>
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Multiple Statistics</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">362411</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">8489</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">985412</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <div id="website-stats" class="flot-charts flot-charts-height" data-colors='["--bs-light", "--bs-primary", "--bs-info", "rgba(28, 132, 238, 0.06)"]'></div>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Realtime Statistics</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">365214</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">6521</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">44587</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <div id="flotRealTime" class="flot-charts flot-charts-height" data-colors='["--bs-info"]'></div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Donut Pie</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">5484</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">964984</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">98498</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <div id="donut-chart">
                            <div id="donut-chart-container" class="flot-charts flot-charts-height" data-colors='["--bs-light", "--bs-primary", "--bs-info"]'>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Pie Chart</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">86541</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">2541</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">102030</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <div id="pie-chart">
                            <div id="pie-chart-container" class="flot-charts flot-charts-height" data-colors='["--bs-primary", "--bs-info", "--bs-light"]'>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@section('scripts')
<!-- flot plugins -->
<script src="assets/libs/flot-charts/jquery.flot.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
<script src="assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.resize.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.pie.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.stack.js"></script>
<script src="assets/libs/flot.curvedlines/curvedLines.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

<!-- flot init -->
<script src="assets/js/pages/flot.init.js"></script>
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