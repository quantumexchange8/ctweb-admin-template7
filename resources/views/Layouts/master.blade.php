<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Current Tech | Admin Templete </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content=" Admin & Dashboard Template" name="description" />
	<meta content="Current Tech" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Bootstrap Css -->
	<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css -->
	<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
	<!-- Custom Css -->
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="light">
	
	<!-- Begin page -->
	<div id="layout-wrapper">

        @include('Layouts.topbar')

		<!-- ========== Left Sidebar Start ========== -->
		@include('Layouts.sidebar')
		<!-- Left Sidebar End -->

		<div class="main-content">
        @yield('contents')
        </div>
        @include('Layouts.footer')
	</div>

	<!-- Right Sidebar -->
        @include('Layouts.rightsidebar')
	<!-- /Right-bar -->

	<!-- Right bar overlay-->
	<div class="rightbar-overlay"></div>

	<!-- JAVASCRIPT -->
	
	<script src="assets/libs/jquery/jquery.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="assets/libs/simplebar/simplebar.min.js"></script>
	<script src="assets/libs/node-waves/waves.min.js"></script>
	<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
	@yield('scripts')
	<!-- App js -->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/ajax.js"></script>
</body>

</html>