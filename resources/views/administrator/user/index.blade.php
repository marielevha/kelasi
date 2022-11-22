<x-dashboard-administrator>

    <x-slot name="title">
		{{ __('user.title_list') }}
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
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/features/file-upload/dropzonejs.js?v=2.1.1"></script>
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
					<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Group.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24"/>
							<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
							<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Aside Toggle-->

			<!--begin::Page Heading-->
			<div class="d-flex align-items-baseline flex-wrap mr-5">

				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold my-1 mr-5">
					{{ __('user.users') }}
				</h5>
				<!--end::Page Title-->

				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
					<li class="breadcrumb-item text-muted">
						<a href="#" class="text-muted">{{ __('user.list_organization_members') }}</a>
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
			<div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('user.add_new_viewer') }}" data-placement="left">
				<a href="{{ route('user.create', ['profile' => env('PROFILE_VIEWER')]) }}" class="btn btn-light-primary font-weight-bolder px-5 mr-3 my-1">
					<span class="svg-icon svg-icon-md">
						<!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Add-user.svg-->
						<svg xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
							viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path
									d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
									fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path
									d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
									fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>

					{{ __('user.add_viewer') }}
				</a>
			</div>
			<!--end::Dropdown-->

			<!--begin::Dropdown-->
			<div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('user.add_new_enterprise') }}" data-placement="top">
				<a href="{{ route('user.create', ['profile' => env('PROFILE_ENTERPRISE')]) }}" class="btn btn-light-primary font-weight-bolder px-5 mr-3 my-1">
					<span class="svg-icon svg-icon-md">
						<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Tools/Tools.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24"/>
								<path d="M15.9497475,3.80761184 L13.0246125,6.73274681 C12.2435639,7.51379539 12.2435639,8.78012535 13.0246125,9.56117394 L14.4388261,10.9753875 C15.2198746,11.7564361 16.4862046,11.7564361 17.2672532,10.9753875 L20.1923882,8.05025253 C20.7341101,10.0447871 20.2295941,12.2556873 18.674559,13.8107223 C16.8453326,15.6399488 14.1085592,16.0155296 11.8839934,14.9444337 L6.75735931,20.0710678 C5.97631073,20.8521164 4.70998077,20.8521164 3.92893219,20.0710678 C3.1478836,19.2900192 3.1478836,18.0236893 3.92893219,17.2426407 L9.05556629,12.1160066 C7.98447038,9.89144078 8.36005124,7.15466739 10.1892777,5.32544095 C11.7443127,3.77040588 13.9552129,3.26588995 15.9497475,3.80761184 Z" fill="#000000"/>
								<path d="M16.6568542,5.92893219 L18.0710678,7.34314575 C18.4615921,7.73367004 18.4615921,8.36683502 18.0710678,8.75735931 L16.6913928,10.1370344 C16.3008685,10.5275587 15.6677035,10.5275587 15.2771792,10.1370344 L13.8629656,8.7228208 C13.4724413,8.33229651 13.4724413,7.69913153 13.8629656,7.30860724 L15.2426407,5.92893219 C15.633165,5.5384079 16.26633,5.5384079 16.6568542,5.92893219 Z" fill="#000000" opacity="0.3"/>
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>

					{{ __('user.add_enterprise') }}
				</a>
			</div>
			<!--end::Dropdown-->

			<!--begin::Dropdown-->
			<div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('user.add_new_administrator') }}" data-placement="top">
				<a href="{{ route('user.create', ['profile' => env('PROFILE_ADMIN')]) }}" class="btn btn-light-danger font-weight-bolder px-5 mr-3 my-1">
					<span class="svg-icon svg-icon-md">
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

					{{ __('user.add_administrator') }}
				</a>
			</div>
			<!--end::Dropdown-->

            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('user.import_new_members_title') }}" data-placement="bottom">
                <a href="#" class="btn btn-light-info font-weight-bolder px-5 px-5 my-1" data-toggle="modal" data-target="#modalImportNewMembers">
					<span class="svg-icon svg-icon-md">
						<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Files/File-plus.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24"/>
								<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
								<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>

                    {{ __('user.import_new_members') }}
                </a>
            </div>
            <!--end::Dropdown-->
		</div>
		<!--end::Toolbar-->

        <!-- Modal-->
        <div class="modal fade" id="modalImportNewMembers" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{ __('user.import_new_members') }}
                            <small>sub title</small>
                        </h5>
                        <button type="button" class="btn btn-light btn-text-danger btn-hover-text-danger font-weight-bold" data-dismiss="modal" aria-label="Close">
                            {{ __('dashboard.close') }}
                        </button>
                    </div>
                    <div class="modal-body mx-5">
                        <form method="POST" action="{{ route('users.upload.import.members') }}" id="importMembers" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bold mb-4">Import Members Model</label>
                                <a href="{{ route('users.download.import.members') }}" type="button" class="btn btn-light-primary btn-lg py-8 btn-block">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Files/File-plus.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    Downloading the new member import model file?
                                </a>

                                <p class="form-text text-muted py-2">
                                    <span class="font-weight-bolder text-info">INFORMATION :</span>
                                    {!! trans('user.subtitle-download-import-model') !!}
                                </p>
                            </div>

                            <div class="separator separator-dashed my-8"></div>

                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bold mb-4">Single File Upload</label>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">
                                            <span class="svg-icon svg-icon-primary">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Files/Upload.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                        <rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1"/>
                                                        <path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero"/>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input " id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="importMember" accept="text/csv" onchange="document.getElementById('importMembers').submit();">
                                        <label class="custom-file-label" for="inputGroupFile01">{!! trans('Choose File') !!}</label>
                                    </div>
                                </div>

                                <p class="form-text text-muted py-2">
                                    <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                    {!! trans('user.subtitle-upload-import-model') !!}
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    @if($message = Session::get('error'))
        <x-alert-error class="mb-4" :message="$message" />
    @endif

    @if($message = Session::get('info'))
        <x-alert-info class="mb-4" :message="$message" />
    @endif

    @if($message = Session::get('warning'))
        <x-alert-warning class="mb-4" :message="$message" :fails="Session::get('fails')" :failsValidation="Session::get('failsValidation')" :success="Session::get('success')" />
    @endif

    <!--begin::Tables Widget 4-->
	<div class="card card-custom gutter-b">
		<!--begin::Header-->
		<div class="card-header">
			<h3 class="card-title">
				<span class="card-label font-weight-bolder font-size-h4 text-dark-75">{{ __('user.list_users') }} <span class="text-muted ml-3 font-weight-bold font-size-lg">{{ trans('user.total_users', ['number' => $counterUsers]) }}</span></span>
			</h3>
			<div class="card-toolbar">
				<ul class="nav nav-pills nav-pills-sm nav-dark">
					<li class="nav-item" data-toggle="tooltip" title="{{ __('user.viewer_users') }}" data-placement="left">
						<a class="nav-link py-2 px-4 active font-weight-bolder font-size-md" data-toggle="tab" href="#kt_tab_table_4_3">{{ __('user.viewer') }}</a>
					</li>

					<li class="nav-item ml-2" data-toggle="tooltip" title="{{ __('user.enterprise_users') }}" data-placement="top">
						<a class="nav-link py-2 px-4 font-weight-bolder font-size-md" data-toggle="tab" href="#kt_tab_table_4_2">{{ __('user.enterprise') }}</a>
					</li>

					<li class="nav-item ml-2" data-toggle="tooltip" title="{{ __('user.administrator_users') }}" data-placement="bottom">
						<a class="nav-link py-2 px-4 font-weight-bolder font-size-md" data-toggle="tab" href="#kt_tab_table_4_1">{{ __('user.administrator') }}</a>
					</li>

					<li class="nav-item ml-2" data-toggle="tooltip" title="{{ __('user.deleted_users') }}" data-placement="right">
						<a class="nav-link py-2 px-4 font-weight-bolder font-size-md" data-toggle="tab" href="#kt_tab_table_4_0">
							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Home/Trash.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"/>
										<path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
										<path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!--end::Header-->
	</div>
	<!--end::Tables Widget 4-->

    <!--begin::Tables Widget 4-->
    <div class="card card-custom">
        <!--begin::Body-->
        <div class="card-body py-0 ">
            <div class="tab-content mt-5" id="myTabTable4">
                <!--begin::Tap pane-->
                <div class="tab-pane fade show active" id="kt_tab_table_4_3" role="tabpanel" aria-labelledby="kt_tab_table_4_3">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <thead>
                            <tr>
                                <th class="p-0 w-50px"></th>
                                <th class="p-0 min-w-120px"></th>
                                <th class="p-0 min-w-100px"></th>
                                <th class="p-0 min-w-100px"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 w-80px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($listOfViewers as $member)
                                <tr>
                                    <td class="pl-0 py-5">
                                        <div class="symbol symbol-45 symbol-light-primary mr-2">
                                                <span class="symbol-label">
                                                    <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                             viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path
                                                                    d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path
                                                                    d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                    fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                        </div>
                                    </td>

                                    <td class="pl-0">
                                        <a href="#"
                                           class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $member->name }}</a>
                                        <span class="text-muted font-weight-bold d-block">{{ $member->email }}</span>
                                    </td>

                                    <td class=""></td>

                                    <td class="text-right">
                                            <span
                                                class="text-muted font-weight-bold d-block">{{ __('user.show_phone') }}</span>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $member->phone }}</span>
                                    </td>

                                    <td class="text-right pr-10">
                                        <span class="text-muted font-weight-bold">{{ Str::upper($member->profile) }}</span>
                                    </td>

                                    <td class="text-right pr-10">
                                        <span class="font-weight-bolder text-info font-size-lg"></span>
                                    </td>

                                    <td class="text-right pr-0">
                                        <a href="{{ route('user.edit', ['profile' => Str::lower($member->profile), 'email' => Str::lower($member->email)]) }}" class="btn btn-icon btn-light-primary m-1">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Write.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>

                                        <a href="{{ route('users.disable.email', ['email' => $member->email]) }}" onclick="return confirm('{{ __('validation.are-you-sure', ['email' => $member->email]) }}')" class="btn btn-icon btn-danger m-1">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Home/Trash.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                                                            <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr class="mt-5">
                                    <p class="text-center text-muted h6">{{ __('user.list_empty') }}</p>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!--end::Tablet-->
                </div>
                <!--end::Tap pane-->

                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_tab_table_4_2" role="tabpanel" aria-labelledby="kt_tab_table_4_2">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <thead>
                            <tr>
                                <th class="p-0 w-50px"></th>
                                <th class="p-0 min-w-120px"></th>
                                <th class="p-0 min-w-100px"></th>
                                <th class="p-0 min-w-100px"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 w-80px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($listOfEnterprises as $member)
                                <tr>
                                    <td class="pl-0 py-5">
                                        <div class="symbol symbol-45 symbol-light-primary mr-2">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                            <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                                 viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path
                                                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                        </div>
                                    </td>

                                    <td class="pl-0">
                                        <a href="#"
                                           class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $member->name }}</a>
                                        <span class="text-muted font-weight-bold d-block">{{ $member->email }}</span>
                                    </td>

                                    <td class=""></td>

                                    <td class="text-right">
                                                <span
                                                    class="text-muted font-weight-bold d-block">{{ __('user.show_phone') }}</span>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $member->phone }}</span>
                                    </td>

                                    <td class="text-right pr-10">
                                        <span class="text-muted font-weight-bold">{{ Str::upper($member->profile) }}</span>
                                    </td>

                                    <td class="text-right pr-10">
                                        <span class="font-weight-bolder text-info font-size-lg"></span>
                                    </td>

                                    <td class="text-right pr-0">
                                        <a href="{{ route('user.edit', ['profile' => Str::lower($member->profile), 'email' => Str::lower($member->email)]) }}" class="btn btn-icon btn-light-primary m-1">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Write.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
                                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                        </a>

                                        <a href="{{ route('users.disable.email', ['email' => $member->email]) }}" onclick="return confirm('{{ __('validation.are-you-sure', ['email' => $member->email]) }}')" class="btn btn-icon btn-danger m-1">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Home/Trash.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                                                            <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr class="mt-5">
                                    <p class="text-center text-muted h6">{{ __('user.list_empty') }}</p>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!--end::Tablet-->
                </div>
                <!--end::Tap pane-->

                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_tab_table_4_1" role="tabpanel" aria-labelledby="kt_tab_table_4_1">

                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <thead>
                            <tr>
                                <th class="p-0 w-50px"></th>
                                <th class="p-0 min-w-120px"></th>
                                <th class="p-0 min-w-100px"></th>
                                <th class="p-0 min-w-100px"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 w-80px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($listOfAdministrators as $member)
                                <tr>
                                    <td class="pl-0 py-5">
                                        <div class="symbol symbol-45 symbol-light-primary mr-2">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                            <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                                 viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path
                                                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                        </div>
                                    </td>

                                    <td class="pl-0">
                                        <a href="#"
                                           class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $member->name }}</a>
                                        <span class="text-muted font-weight-bold d-block">{{ $member->email }}</span>
                                    </td>

                                    <td class=""></td>

                                    <td class="text-right">
                                                <span
                                                    class="text-muted font-weight-bold d-block">{{ __('user.show_phone') }}</span>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $member->phone }}</span>
                                    </td>

                                    <td class="text-right pr-10">
                                        <span class="text-muted font-weight-bold">{{ Str::upper($member->profile) }}</span>
                                    </td>

                                    <td class="text-right pr-10">
                                        <span class="font-weight-bolder text-info font-size-lg"></span>
                                    </td>

                                    <td class="text-right pr-0">
                                        <a href="{{ route('user.edit', ['profile' => Str::lower($member->profile), 'email' => Str::lower($member->email)]) }}" class="btn btn-icon btn-light-primary m-1">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Write.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
                                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                        </a>

                                        <a href="{{ route('users.disable.email', ['email' => $member->email]) }}" onclick="return confirm('{{ __('validation.are-you-sure', ['email' => $member->email]) }}')" class="btn btn-icon btn-danger m-1">
                                                <span class="svg-icon svg-icon-lg">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Home/Trash.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                                                            <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr class="mt-5">
                                    <p class="text-center text-muted h6">{{ __('user.list_empty') }}</p>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!--end::Tablet-->

                </div>
                <!--end::Tap pane-->

                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_tab_table_4_0" role="tabpanel" aria-labelledby="kt_tab_table_4_0">

                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <thead>
                            <tr>
                                <th class="p-0 w-50px"></th>
                                <th class="p-0 min-w-120px"></th>
                                <th class="p-0 min-w-100px"></th>
                                <th class="p-0 min-w-100px"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 w-80px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($listOfDisabledUsers as $member)
                                <tr>
                                    <td class="pl-0 py-5">
                                        <div class="symbol symbol-45 symbol-light-primary mr-2">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                            <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                                 viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path
                                                                        d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path
                                                                        d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                        fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                        </div>
                                    </td>

                                    <td class="pl-0">
                                        <a href="#"
                                           class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $member->name }}</a>
                                        <span class="text-muted font-weight-bold d-block">{{ $member->email }}</span>
                                    </td>

                                    <td class=""></td>

                                    <td class="text-right">
                                                <span
                                                    class="text-muted font-weight-bold d-block">{{ __('user.show_phone') }}</span>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $member->phone }}</span>
                                    </td>

                                    <td class="text-right pr-10">
                                        <span class="text-muted font-weight-bold">{{ Str::upper($member->profile) }}</span>
                                    </td>

                                    <td class="text-right pr-10">
                                        <span class="font-weight-bolder text-info font-size-lg"></span>
                                    </td>

                                    <td class="text-right pr-0">
                                        <a href="{{ route('user.edit', ['profile' => Str::lower($member->profile), 'email' => Str::lower($member->email)]) }}" class="btn btn-icon btn-light m-1">
                                                <span class="svg-icon svg-icon-success svg-icon-md">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Design/Edit.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                        </a>
                                        <a href="{{ route('users.enable.email', ['email' => $member->email]) }}" onclick="return confirm('{{ __('validation.are-you-sure', ['email' => $member->email]) }}')" class="btn btn-icon btn-danger m-1">
                                            <span class="svg-icon svg-icon-success svg-icon-md">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Home/Trash.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-icon"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">												<rect x="0" y="0" width="24" height="24"></rect>												<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>												<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path></g></svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr class="mt-5">
                                    <p class="text-center text-muted h6">{{ __('user.list_empty') }}</p>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!--end::Tablet-->

                </div>
                <!--end::Tap pane-->


            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Tables Widget 4-->

</x-dashboard-administrator>
