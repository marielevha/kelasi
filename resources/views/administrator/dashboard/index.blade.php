<x-dashboard-administrator>

	<x-slot name="title">
		{{ __('dashboard.title') }}
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
            @include('components.header-administrator')
		</ul>
		<!--end::Header Nav-->

	</x-slot>

	<x-slot name="subheader">

		<!--begin::Info-->
		<div class="d-flex align-items-center flex-wrap mr-1">

			<!--begin::Aside Toggle-->
			<button class="btn btn-icon mr-4">
				<span class="svg-icon svg-icon-lg svg-icon-primary">
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
				<h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('dashboard.dashboard') }}</h5>
				<!--end::Page Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
					<li class="breadcrumb-item text-muted">
						<a href="#" class="text-muted">{{ __('dashboard.updates_statistics') }}</a>
					</li>
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page Heading-->

		</div>
		<!--end::Info-->

		<!--begin::Toolbar-->
		<div class="d-flex align-items-center flex-wrap">

			<!--begin::Dropdown-->
			<div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('dashboard.add_member') }}"
				data-placement="top">

				<a href="#" class="btn btn-light-primary font-weight-bolder px-5 mr-3 my-1"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="svg-icon svg-icon-md">
						<!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="1"/>
                                <path d="M5,10 L7,10 C7.55228475,10 8,10.4477153 8,11 L8,13 C8,13.5522847 7.55228475,14 7,14 L5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 L14,7 C14,7.55228475 13.5522847,8 13,8 L11,8 C10.4477153,8 10,7.55228475 10,7 L10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L11,14 C10.4477153,14 10,13.5522847 10,13 L10,11 C10,10.4477153 10.4477153,10 11,10 Z M17,4 L19,4 C19.5522847,4 20,4.44771525 20,5 L20,7 C20,7.55228475 19.5522847,8 19,8 L17,8 C16.4477153,8 16,7.55228475 16,7 L16,5 C16,4.44771525 16.4477153,4 17,4 Z M17,10 L19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 L17,14 C16.4477153,14 16,13.5522847 16,13 L16,11 C16,10.4477153 16.4477153,10 17,10 Z M5,16 L7,16 C7.55228475,16 8,16.4477153 8,17 L8,19 C8,19.5522847 7.55228475,20 7,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,17 C4,16.4477153 4.44771525,16 5,16 Z M11,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 L10,17 C10,16.4477153 10.4477153,16 11,16 Z M17,16 L19,16 C19.5522847,16 20,16.4477153 20,17 L20,19 C20,19.5522847 19.5522847,20 19,20 L17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,16.4477153 16.4477153,16 17,16 Z" fill="#000000"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
					</span>
					{{ __('dashboard.quick_actions') }}
				</a>

				<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
					<!--begin::Navigation-->
					<ul class="navi navi-hover">
						<li class="navi-item">
							<a href="{{ route('user.create', ['profile' => 'commercial']) }}" class="navi-link px-5 py-5 font-weight-bold">
								<span class="navi-text">{{ __('dashboard.new_commercial') }}</span>
							</a>
						</li>

						<li class="navi-item">
							<a href="{{ route('user.create', ['profile' => 'storekeeper']) }}" class="navi-link px-5 py-5 font-weight-bold">
								<span class="navi-text">{{ __('dashboard.new_storekeeper') }}</span>
							</a>
						</li>

                        <div class="separator separator-dashed"></div>

                        <li class="navi-item">
							<a href="{{ route('user.create', ['profile' => 'administrator']) }}" class="navi-link px-5 py-5 font-weight-bold">
								<span class="navi-text text-danger">{{ __('dashboard.new_admnistrator') }}</span>
							</a>
						</li>
					</ul>
					<!--end::Navigation-->
				</div>

			</div>
			<!--end::Dropdown-->

		</div>
		<!--end::Toolbar-->

	</x-slot>

    @if($message = Session::get('error'))
        <x-alert-error class="mb-4" :message="$message" />
    @endif

    @if($message = Session::get('info'))
        <x-alert-info class="mb-4" :message="$message" />
    @endif

	<h1 class="text-center">Dashboard Administrator</h1>

</x-dashboard-administrator>
