@extends('Layouts.master')
@section('contents')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Font Awesome</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Icons</a></li>
                        <li class="breadcrumb-item active">Font Awesome</li>
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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Solid</h4>
                        <p class="card-title-desc mb-2">Use <code>&lt;i class="fas fa-ad"&gt;&lt;/i&gt;</code> <span
                                class="badge bg-success">v 5.13.0</span>.</p>
                        <div class="row icon-demo-content" id="solid">
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Regular</h4>
                        <p class="card-title-desc mb-2">Use <code>&lt;i class="far fa-address-book"&gt;&lt;/i&gt;</code>
                            <span class="badge bg-success">v 5.13.0</span>.</p>
                        <div class="row icon-demo-content" id="regular">
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Brands</h4>
                        <p class="card-title-desc mb-2">Use <code>&lt;i class="fab fa-500px"&gt;&lt;/i&gt;</code> <span
                                class="badge bg-success">v 5.13.0</span>.</p>
                        <div class="row icon-demo-content" id="brand">
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@section('scripts')
<!-- fontawesome icons init -->
<script src="assets/js/pages/fontawesome.init.js"></script>

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
