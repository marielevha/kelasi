<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--begin::Head-->
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
	<title>{{ config('app.name', 'Laravel') }} | {{ $title ?? 'Dashboard' }}</title>

	<meta name="description" content="Updates and statistics" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	{{-- begin::Fonts Keen--}}
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	{{-- end::Fonts Keen--}}

	{{ $local_link }}

	{{-- begin::Global Styles Keen --}}
	<link href="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/plugins/global/plugins.bundle.css?v=2.1.1" rel="stylesheet" type="text/css" />
	<link href="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/plugins/custom/prismjs/prismjs.bundle.css?v=2.1.1" rel="stylesheet" type="text/css" />
	<link href="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/css/style.bundle.css?v=2.1.1" rel="stylesheet" type="text/css" />
	{{-- end::Global Styles Keen --}}

	<link rel="shortcut icon" href="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/media/logos/favicon.ico" />
	
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">

	{{ $slot }}

	<script>var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0BB783", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#D7F9EF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
	<!--end::Global Config-->

	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/plugins/global/plugins.bundle.js?v=2.1.1"></script>
	<script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/plugins/custom/prismjs/prismjs.bundle.js?v=2.1.1"></script>
	<script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/scripts.bundle.js?v=2.1.1"></script>
	<!--end::Global Theme Bundle-->

	{{ $local_script }}

</body>
<!--end::Body-->

</html>
