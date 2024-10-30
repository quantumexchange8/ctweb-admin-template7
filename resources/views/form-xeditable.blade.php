@extends('Layouts.master')
@section('contents')

<!-- Plugins css -->
<link href="assets/libs/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Form Xeditable</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Xeditable</li>
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

                        <h4 class="card-title">Inline Example</h4>
                        <p class="card-title-desc">This library allows you to create
                            editable elements on your page. It can be used with any engine
                            (bootstrap, jquery-ui, jquery only) and includes both popup and inline
                            modes. Please try out demo to see how it works.</p>

                        <div class="table-responsive">
                            <table class="table table-striped table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th style="width: 50%;">Inline</th>
                                        <th>Examples</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Simple Text Field</td>
                                        <td>
                                            <a href="#" id="inline-username" data-type="text" data-pk="1"
                                                data-title="Enter username">superuser</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Empty text field, required</td>
                                        <td>
                                            <a href="#" id="inline-firstname" data-type="text" data-pk="1"
                                                data-placement="right" data-placeholder="Required"
                                                data-title="Enter your firstname"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Select, local array, custom display</td>
                                        <td>
                                            <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value=""
                                                data-title="Select sex"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Combodate</td>
                                        <td>
                                            <a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24"
                                                data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY"
                                                data-template="D / MMM / YYYY" data-pk="1"
                                                data-title="Select Date of birth"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Textarea, buttons below. Submit by ctrl+enter</td>
                                        <td>
                                            <a href="#" id="inline-comments" data-type="textarea" data-pk="1"
                                                data-placeholder="Your comments here..."
                                                data-title="Enter comments">awesome user!</a>
                                        </td>
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
@section('scripts')
<!-- Plugins js -->
<script src="assets/libs/moment/min/moment.min.js"></script>
<script src="assets/libs/bootstrap-editable/js/index.js"></script>

<!-- Init js-->
<script src="assets/js/pages/form-xeditable.init.js"></script>

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