@extends('Layouts.master')
@section('contents')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Grid</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                        <li class="breadcrumb-item active">Grid</li>
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

                        <h4 class="card-title">Grid options</h4>
                        <p class="card-title-desc">See how aspects of the Bootstrap grid
                            system work across multiple devices with a handy table.</p>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col" class="text-center">
                                            xs<br>
                                            <span class="fw-normal">&lt;576px</span>
                                        </th>
                                        <th scope="col" class="text-center">
                                            sm<br>
                                            <span class="fw-normal">≥576px</span>
                                        </th>
                                        <th scope="col" class="text-center">
                                            md<br>
                                            <span class="fw-normal">≥768px</span>
                                        </th>
                                        <th scope="col" class="text-center">
                                            lg<br>
                                            <span class="fw-normal">≥992px</span>
                                        </th>
                                        <th scope="col" class="text-center">
                                            xl<br>
                                            <span class="fw-normal">≥1200px</span>
                                        </th>
                                        <th scope="col" class="text-center">
                                            xxl<br>
                                            <span class="fw-normal">≥1400px</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Grid behavior</th>
                                        <td>Horizontal at all times</td>
                                        <td colspan="5">Collapsed to start, horizontal above breakpoints</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Max container width</th>
                                        <td>None (auto)</td>
                                        <td>540px</td>
                                        <td>720px</td>
                                        <td>960px</td>
                                        <td>1140px</td>
                                        <td>1320px</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Class prefix</th>
                                        <td><code>.col-</code></td>
                                        <td><code>.col-sm-</code></td>
                                        <td><code>.col-md-</code></td>
                                        <td><code>.col-lg-</code></td>
                                        <td><code>.col-xl-</code></td>
                                        <td><code>.col-xxl-</code></td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row"># of columns</th>
                                        <td colspan="6">12</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Gutter width</th>
                                        <td colspan="6">24px (12px on each side of a column)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Custom gutters</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Nestable</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Offsets</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                    <tr>
                                        <th class="text-nowrap" scope="row">Column ordering</th>
                                        <td colspan="6">Yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection
@section('scripts')<script>
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