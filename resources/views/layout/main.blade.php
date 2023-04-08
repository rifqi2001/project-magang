<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
		<meta name="_token" content="{{ csrf_token() }}" />

		<!-- Title -->
		<title> @yield('title', 'Virtual Technopark') </title>

		<!--- Favicon --->
		<link rel="icon" href="{{ asset('virtual/assets/img/fav.png') }}" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="{{ asset('virtual/assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" id="style"/>

		<!--- Icons css --->
		<link href="{{ asset('virtual/assets/css/icons.css') }}" rel="stylesheet">

		<!--- Style css --->
		<link href="{{ asset('virtual/assets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('virtual/assets/css/plugins.css') }}" rel="stylesheet">

		<!--- Animations css --->
		<link href="{{ asset('virtual/assets/css/animate.css') }}" rel="stylesheet">

		<style>
			.ff_fileupload_wrap table.ff_fileupload_uploads button.ff_fileupload_start_upload{
				display: none !important;
			}
		</style>

        @yield('css')

	</head>
	<body class="main-body app sidebar-mini ltr">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{ asset('virtual/assets/img/loaders/loader-1.svg') }}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
	   <div class="page custom-index">

			<!-- main-header -->
			@include('layout.navbar')
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
			@include('layout.sidebar')
			<!-- main-sidebar -->

		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">

				<!-- breadcrumb -->
				@yield('breadcumb')
				<!-- /breadcrumb -->

				<!-- row -->
				@yield('content')
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!--Sidebar-right-->
		@include('layout.right-sidebar')
		<!--/Sidebar-right-->

		<!-- Footer opened -->
		@include('layout.footer')
		<!-- Footer closed -->
	</div>
		<!-- page closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="ti-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="{{ asset('virtual/assets/plugins/jquery/jquery.min.js') }}"></script>

		<!--- Bootstrap Bundle js --->
		<script src="{{ asset('virtual/assets/plugins/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('virtual/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!--- Ionicons js --->
		<script src="{{ asset('virtual/assets/plugins/ionicons/ionicons.js') }}"></script>

		<!--- Moment js --->
		<script src="{{ asset('virtual/assets/plugins/moment/moment.js') }}"></script>

		<script src="{{ asset('virtual/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

		<!--- JQuery sparkline js --->
		<script src="{{ asset('virtual/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        
		
		<!--- P-scroll js --->
		<script src="{{ asset('virtual/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
		<script src="{{ asset('virtual/assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>
		
		<!--- Sidebar js --->
		<script src="{{ asset('virtual/assets/plugins/side-menu/sidemenu.js') }}"></script>
		
		<!--- sticky js --->
		<script src="{{ asset('virtual/assets/js/sticky.js') }}"></script>
		
		<!--- Right-sidebar js --->
		<script src="{{ asset('virtual/assets/plugins/sidebar/sidebar.js') }}"></script>
		<script src="{{ asset('virtual/assets/plugins/sidebar/sidebar-custom.js') }}"></script>
		
		
		<!--- Eva-icons js --->
		<script src="{{ asset('virtual/assets/js/eva-icons.min.js') }}"></script>

		<!-- SWEET-ALERT JS -->
		<script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
		<script src="{{ asset('assets/js/sweet-alert.js') }}"></script>

		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				}
			});
			
			$(document).ready(function () {
				$(document).on('click', '.modal-effect', function (e) { 
					e.preventDefault();
					var effect = $(this).attr('data-bs-effect');
					$('#modal_form').addClass(effect);
				});
				// hide modal with effect
				$(document).on('hidden.bs.modal', '#modal_form', function (e) {
					$(this).removeClass(function (index, className) {
						return (className.match(/(^|\s)effect-\S+/g) || []).join(' ');
					});
				});
			});


			let type = false;
			if ('{{session()->has("success")}}' == true) type = 'success';
			if ('{{session()->has("error")}}' == true) type = 'error';

			if (type) {
				Swal.fire({
					title: type == 'success' ? "Success !" : 'Error !',
					html: type == 'success' ? "{{ session()->get('success') }}" : "{!! session()->get('error') !!}",
					icon: `${type}`,
					confirmButtonColor: "#556ee6",
				})
			}


		</script>
		
		@yield('script')

		<!--themecolor js-->
		<script src="{{ asset('virtual/assets/js/themecolor.js') }}"></script>

		<!--swither-styles js-->
		<script src="{{ asset('virtual/assets/js/swither-styles.js') }}"></script>

		<!--- Custom js --->
		<script src="{{ asset('virtual/assets/js/custom.js') }}"></script>

	</body>
</html>