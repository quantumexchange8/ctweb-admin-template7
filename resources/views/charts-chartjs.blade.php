@extends('Layouts.master')
@section('contents')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Chartjs Chart</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                        <li class="breadcrumb-item active">Chartjs Chart</li>
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

                        <h4 class="card-title mb-4">Line Chart</h4>

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

                        <canvas id="lineChart"  data-colors='["--bs-primary-rgb, 0.2", "--bs-primary", "--bs-light-rgb, 0.2", "--bs-light"]' height="300"></canvas>

                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Bar Chart</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">2541</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">84845</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">12001</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="bar" height="300" data-colors='["--bs-info", "--bs-info"]'></canvas>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Pie Chart</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">2536</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">69421</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">89854</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="pie" height="260" data-colors='["--bs-info", "--bs-light"]'></canvas>

                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Donut Chart</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">9595</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">36524</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">62541</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="doughnut" height="260" data-colors='["--bs-primary", "--bs-light"]'></canvas>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Polar Chart</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">4852</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">3652</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">85412</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>
                        </div>

                        <canvas id="polarArea" height="300" data-colors='["--bs-warning", "--bs-info", "--bs-light", "--bs-primary"]'> </canvas>

                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">Radar Chart</h4>

                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">694</h5>
                                <p class="text-muted text-truncate">Activated</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">55210</h5>
                                <p class="text-muted text-truncate">Pending</p>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0 font-size-20 text-truncate">489498</h5>
                                <p class="text-muted text-truncate">Deactivated</p>
                            </div>

                            <canvas id="radar" height="300" data-colors='["--bs-light-rgb, 0.5", "--bs-light", "--bs-primary-rgb, 0.2", "--bs-primary"]'></canvas>

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@section('scripts')
<!-- Chart JS -->
<script src="assets/libs/chart.js/Chart.bundle.min.js"></script>
<script src="assets/js/pages/chartjs.init.js"></script>
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