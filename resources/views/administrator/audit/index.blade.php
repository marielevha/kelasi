<x-dashboard-administrator>

	<x-slot name="title">
		{{ __('audit.title') }}
	</x-slot>

	<x-slot name="local_link"></x-slot>

	<x-slot name="local_script">
		<!--begin::Page Scripts(used by this page)-->
		<script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/builder.js?v=2.1.1"></script>
		<!--end::Page Scripts-->
	</x-slot>

	<x-slot name="header">
		<!--begin::Header Nav-->
		<ul class="menu-nav">
			<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
				<a href="{{ route('dashboard') }}" class="menu-link">
					<span class="menu-text">{{ __('audit.dashboard') }}</span>
				</a>
			</li>
			<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
				<a href="{{ route('user.index') }}" class="menu-link">
					<span class="menu-text">{{ __('audit.users') }}</span>
				</a>
			</li>
			<li class="menu-item menu-item-active" aria-haspopup="true">
				<a href="{{ route('audit.index') }}" class="menu-link">
					<span class="menu-text">{{ __('audit.audit_trails') }}</span>
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
				<span class="svg-icon svg-icon-lg svg-icon-primary">
					<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Adress-book2.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"/>
							<path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3"/>
							<path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Aside Toggle-->

			<!--begin::Page Heading-->
			<div class="d-flex align-items-baseline flex-wrap mr-5">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('audit.audit_trails') }}</h5>
				<!--end::Page Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
					<li class="breadcrumb-item text-muted">
						<a href="#" class="text-muted">{{ __('audit.audit_trail_informations') }}</a>
					</li>
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page Heading-->
		</div>
		<!--end::Info-->

		<!--begin::Toolbar-->
		<div class="d-flex align-items-center flex-wrap">
            <form action="{{ route('users.download.audit.file') }}" method="POST">
                @csrf
                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('audit.download_audit_trails') }}" data-placement="left">
                    <button type="submit" class="btn btn-light-info font-weight-bolder px-5 my-1">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Files/DownloadedFile.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M14.8875071,11.8306874 L12.9310336,11.8306874 L12.9310336,9.82301606 C12.9310336,9.54687369 12.707176,9.32301606 12.4310336,9.32301606 L11.4077349,9.32301606 C11.1315925,9.32301606 10.9077349,9.54687369 10.9077349,9.82301606 L10.9077349,11.8306874 L8.9512614,11.8306874 C8.67511903,11.8306874 8.4512614,12.054545 8.4512614,12.3306874 C8.4512614,12.448999 8.49321518,12.5634776 8.56966458,12.6537723 L11.5377874,16.1594334 C11.7162223,16.3701835 12.0317191,16.3963802 12.2424692,16.2179453 C12.2635563,16.2000915 12.2831273,16.1805206 12.3009811,16.1594334 L15.2691039,12.6537723 C15.4475388,12.4430222 15.4213421,12.1275254 15.210592,11.9490905 C15.1202973,11.8726411 15.0058187,11.8306874 14.8875071,11.8306874 Z" fill="#000000"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        {{ __('audit.download_audit_trails') }}
                    </button>
                </div>
                <!--end::Dropdown-->
            </form>
		</div>
		<!--end::Toolbar-->

	</x-slot>

    @if($message = Session::get('error'))
        <x-alert-error class="mb-4" :message="$message" />
    @endif

    @if($message = Session::get('info'))
        <x-alert-info class="mb-4" :message="$message" />
    @endif

<!--begin::Notice-->
	<div class="card card-custom gutter-b">
		<div class="card-body d-flex py-10">
			<!--begin::Icon-->
			<div class="d-flex h-70px w-70px flex-center position-relative mt-3 ml-9 mr-17">
				<span class="svg-icon svg-icon-6x svg-icon-primary position-absolute opacity-15">
					<!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">
						<g stroke="none" stroke-width="1" fill-rule="evenodd">
							<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
				<span class="svg-icon svg-icon-3x svg-icon-primary position-absolute">
					<!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Tools/Tools.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000" />
							<path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</div>
			<!--end::Icon-->
			<!--begin::Description-->
			<div class="text-dark-50 font-weight-bold font-size-lg">
				{{ __('audit.audit_description') }}
				<p class="mt-5">
				<span class="text-danger font-weight-bolder mr-2">NOTE :</span>{!! trans('audit.note') !!}</p>
			</div>
			<!--end::Description-->
		</div>
	</div>
	<!--end::Notice-->

</x-dashboard-administrator>
