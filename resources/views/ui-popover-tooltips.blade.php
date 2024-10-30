@extends('Layouts.master')
@section('contents')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Popover & Tooltips</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                        <li class="breadcrumb-item active">Popover & Tooltips</li>
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

                        <h4 class="card-title">Popovers</h4>
                        <p class="card-title-desc">Add small overlay content, like those found in iOS, to any element for housing secondary information.</p>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-light waves-effect" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on top
                            </button>
                            <button type="button" class="btn btn-light waves-effect" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on right
                            </button>
                            <button type="button" class="btn btn-light waves-effect"
                                    data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom"
                                    data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on bottom
                            </button>

                            <button type="button" class="btn btn-light waves-effect" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" title="Popover Title" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                Popover on left
                            </button>

                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-container="body" data-bs-toggle="popover" data-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</button>
                        </div>
                        
                    </div><!-- end row -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Tooltips</h4>
                        <p class="card-title-desc">Hover over the links below to see tooltips:</p>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                Tooltip on top
                            </button>

                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                                Tooltip on right
                            </button>

                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                                Tooltip on bottom
                            </button>

                            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                                Tooltip on left
                            </button>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

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

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>
@endsection