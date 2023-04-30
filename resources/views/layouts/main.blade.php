<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <html class="modern fixed has-top-menu has-left-sidebar-half" data-style-switcher-options="{'changeLogo': false}">

	<!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="{{ asset('/admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{ asset('/admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{{ asset('/admin/assets/css/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/admin/assets/css/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/admin/assets/css/skins/brand/navy.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/admin/assets/css/skins/aside/navy.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{ asset('/admin/assets/media/logos/favicon.ico')}}" />
    @include('partials/_header')
<style>
.flex{
    display: flex;
    flex-direction: row;
}
.content{
   /* padding-left: 250px; */
   padding-left:260px ;
   padding-top: 80px;
}
</style>
</head>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
    <div class="nav">@include('partials/_navbar')</div>

    <div class="flex">

<div class="sidebar">
    @include('partials/_sidebar')
</div>
<div class="right">
    <div class="content">
        @yield('contents')

    </div>
    <div class="footer">
        {{-- @include('partials/_footer') --}}
    </div>
</div>
    </div>

	<script src="/admin/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="/admin/assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->
		<script src="/admin/assets/js/pages/components/datatables/basic/paginations.js" type="text/javascript"></script>

		<!--begin::Page Vendors(used by this page) -->
		<script src="/admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="/admin/assets/js/pages/dashboard.js" type="text/javascript"></script>

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

</body>
</html>






