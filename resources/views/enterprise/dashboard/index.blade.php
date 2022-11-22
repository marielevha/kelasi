<x-dashboard-commercial>

	<x-slot name="title">
		{{ __('commercial-home.title') }}
	</x-slot>

	<x-slot name="local_link">
		{{-- begin::Local Vendors Styles Keen --}}
		<link href="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=2.1.1" rel="stylesheet" type="text/css" />
		{{-- end::Local Vendors Styles Keen --}}
	</x-slot>

	<x-slot name="local_script">
		<!--begin::Page Vendors(used by this page)-->
		<script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=2.1.1"></script>
		<!--end::Page Vendors-->

		<!--begin::Page Scripts(used by this page)-->
		<script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/widgets.js?v=2.1.1"></script>
		<!--end::Page Scripts-->
	</x-slot>

	<x-slot name="header">
		<!--begin::Header Nav-->
		<ul class="menu-nav">
			<li class="menu-item menu-item-active" aria-haspopup="true">
				<a href="{{ route('dashboard') }}" class="menu-link">
					<span class="menu-text">{!! trans('commercial-home.nav-home') !!}</span>
				</a>
			</li>
			<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
				<a href="{{ route('shop.index') }}" class="menu-link">
					<span class="menu-text">{!! trans('commercial-home.nav-shop') !!}</span>
				</a>
			</li>
            <li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
                <a href="{{ route('tickets.index') }}" class="menu-link">
                    <span class="menu-text">{!! trans('commercial-home.nav-tickets') !!}</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
                <a href="{{ route('technicians.index') }}" class="menu-link">
                    <span class="menu-text">{!! trans('commercial-home.nav-technicians') !!}</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
                <a href="{{ route('agencies.index') }}" class="menu-link">
                    <span class="menu-text">{!! trans('commercial-home.nav-agencies') !!}</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
                <a href="{{ route('preventive.interventions.index') }}" class="menu-link">
                    <span class="menu-text">{!! trans('commercial-home.nav-preventive-interventions') !!}</span>
                </a>
            </li>
		</ul>
		<!--end::Header Nav-->
	</x-slot>

	<x-slot name="subheader">
		<!--begin::Info-->
		<div class="d-flex align-items-center flex-wrap mr-1">
			<!--begin::Aside Toggle-->
			<button class="btn btn-icon mr-4">
				<span class="svg-icon svg-icon-primary svg-icon-lg">
					<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Home/Home.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"/>
							<path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Aside Toggle-->

			<!--begin::Page Heading-->
			<div class="d-flex align-items-baseline flex-wrap mr-5">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold my-1 mr-5">{!! trans('commercial-home.title') !!}</h5>
				<!--end::Page Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
					<li class="breadcrumb-item text-muted">
						<a href="#" class="text-muted">{!! trans('commercial-home.subtitle-updates-statistics') !!}</a>
					</li>
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page Heading-->

		</div>
		<!--end::Info-->

		<!--begin::Toolbar-->

{{--		<div class="d-flex align-items-center flex-wrap">--}}

{{--			<!--begin::Dropdown-->--}}
{{--			<div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('dashboard.quick_actions') }}"--}}
{{--				data-placement="top">--}}

{{--				<a href="#" class="btn btn-light-primary font-weight-bolder px-5 mr-3 my-1"--}}
{{--					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--					<span class="svg-icon svg-icon-md">--}}
{{--						<!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Add-user.svg-->--}}
{{--						<svg xmlns="http://www.w3.org/2000/svg"--}}
{{--							xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
{{--							viewBox="0 0 24 24" version="1.1">--}}
{{--							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--								<polygon points="0 0 24 0 24 24 0 24" />--}}
{{--								<path--}}
{{--									d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"--}}
{{--									fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
{{--								<path--}}
{{--									d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"--}}
{{--									fill="#000000" fill-rule="nonzero" />--}}
{{--							</g>--}}
{{--						</svg>--}}
{{--						<!--end::Svg Icon-->--}}
{{--					</span>--}}
{{--					{{ __('dashboard.add_member') }}--}}
{{--				</a>--}}

{{--				<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">--}}
{{--					<!--begin::Navigation-->--}}
{{--					<ul class="navi navi-hover">--}}
{{--						<li class="navi-item">--}}
{{--							<a href="{{ route('user.create', ['profile' => 'commercial']) }}" class="navi-link px-5 py-5">--}}
{{--								<span class="navi-text">{{ __('dashboard.new_commercial') }}</span>--}}
{{--							</a>--}}
{{--						</li>--}}

{{--						<li class="navi-item">--}}
{{--							<a href="{{ route('user.create', ['profile' => 'storekeeper']) }}" class="navi-link px-5 py-5">--}}
{{--								<span class="navi-text">{{ __('dashboard.new_storekeeper') }}</span>--}}
{{--							</a>--}}
{{--						</li>--}}

{{--						<li class="navi-item">--}}
{{--							<a href="{{ route('user.create', ['profile' => 'administrator']) }}" class="navi-link px-5 py-5">--}}
{{--								<span class="navi-text">{{ __('dashboard.new_admnistrator') }}</span>--}}
{{--							</a>--}}
{{--						</li>--}}
{{--					</ul>--}}
{{--					<!--end::Navigation-->--}}
{{--				</div>--}}

{{--			</div>--}}
{{--			<!--end::Dropdown-->--}}

{{--		</div>--}}

        <!--end::Toolbar-->
	</x-slot>

    @if($message = Session::get('error'))
        <x-alert-error class="mb-4" :message="$message" />
    @endif

    @if($message = Session::get('info'))
        <x-alert-info class="mb-4" :message="$message" />
    @endif

	<h1 class="text-center">Dashboard Commercial</h1>

</x-dashboard-commercial>
