<x-dashboard-commercial>

	<x-slot name="title">
		{{ __('List Of Banks') }}
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
			<li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
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
            <li class="menu-item menu-item-active" aria-haspopup="true">
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
                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Home/Building.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" fill="#000000"/>
                            <rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
                            <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" fill="#000000" opacity="0.3"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
			</button>
			<!--end::Aside Toggle-->

			<!--begin::Page Heading-->
			<div class="d-flex align-items-baseline flex-wrap mr-5">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold my-1 mr-5">{!! trans('List Of Banks') !!}</h5>
				<!--begin::Breadcrumb-->
                <!--end::Page Title-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
					<li class="breadcrumb-item text-muted">
						<a href="#" class="text-muted">{!! trans('List Of Organization Banks') !!}</a>
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
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Banks Actions') }}"
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

                    {{ __('Quick Actions') }}
                </a>

                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                    <!--begin::Navigation-->
                    <ul class="navi navi-hover">
                        <li class="navi-item">
                            <a href="{{ route('bank.create') }}" class="navi-link px-5 py-5 font-weight-bold">
                                <span class="navi-text">{{ __('Add New Bank') }}</span>
                            </a>
                        </li>

                        <div class="separator separator-dashed"></div>

                        <li class="navi-item">
                            <a href="{{ route('agencies.index') }}" class="navi-link px-5 py-5 font-weight-bold">
                                <span class="navi-text text-danger">{{ __('Back to Agencies') }}</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
            </div>
            <!--end::Dropdown-->

            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Import an .csv file of the following format: name;') }}" data-placement="bottom">
                <a href="#" class="btn btn-light-info font-weight-bolder px-5 px-5 my-1" data-toggle="modal" data-target="#modalImportNewBanks">
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

                    {{ __('Import New Banks') }}
                </a>
            </div>
            <!--end::Dropdown-->
        </div>
        <!--end::Toolbar-->

        <!-- Modal-->
        <div class="modal fade" id="modalImportNewBanks" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{ __('Import New Banks') }}
                        </h5>
                        <button type="button" class="btn btn-light btn-text-danger btn-hover-text-danger font-weight-bold" data-dismiss="modal" aria-label="Close">
                            {{ __('dashboard.close') }}
                        </button>
                    </div>
                    <div class="modal-body mx-5">
                        <form method="POST" action="{{ route('bank.upload.import.members') }}" id="importBanks" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bold mb-4">Import Members Model</label>
                                <a href="{{ route('bank.download.import.members') }}" type="button" class="btn btn-light-primary btn-lg py-8 btn-block">
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
                                    {{ __('Downloading the new member import model file?') }}
                                </a>

                                <p class="form-text text-muted py-2">
                                    <span class="font-weight-bolder text-info">INFORMATION :</span>
                                    {!! trans('You must Import this .csv file in the following format: <code class="font-size-sm">name;</code>. It will help you to facilitate the import of new banks of the organization.') !!}
                                </p>
                            </div>

                            <div class="separator separator-dashed my-8"></div>

                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bold mb-4">{{ __('Single File Upload') }}</label>

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
                                        <input type="file" class="custom-file-input " id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="importMember" accept="text/csv" onchange="document.getElementById('importBanks').submit();">
                                        <label class="custom-file-label" for="inputGroupFile01">{!! trans('Choose File') !!}</label>
                                    </div>
                                </div>

                                <p class="form-text text-muted py-2">
                                    <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                    {!! trans('The file you upload must respect the imposed format. If there are users who do not follow this format, they will simply be <code class="font-size-sm">ignored</code>.') !!}
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

    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <span class="card-label font-weight-bolder font-size-h4 text-dark-75">{{ __('List Of Banks') }} <span class="text-muted ml-3 font-weight-bold font-size-lg">{{ trans('user.total_users', ['number' => count($listOfBanks)]) }}</span></span>
            </div>
            <div class="card-toolbar">
                <ul class="nav nav-bold nav-pills nav-pills-sm nav-dark">
                    <li class="nav-item" data-toggle="tooltip" title="{{ __('List Of All Enabled Banks') }}" data-placement="left">
                        <a class="nav-link py-2 px-4 active font-weight-bolder font-size-md" data-toggle="tab" href="#kt_tab_table_4_3">{{ __('Enabled Banks') }}</a>
                    </li>

                    <li class="nav-item ml-2" data-toggle="tooltip" title="{{ __('List Of Disabled Banks') }}" data-placement="right">
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
    </div>

    <!--begin::Tables Widget 4-->
    <div class="card card-custom">
        <!--begin::Body-->
        <div class="card-body pt-1 pb-4">
            <div class="tab-content mt-5" id="myTabTable4">
                <!--begin::Tap pane-->
                <div class="tab-pane fade show active" id="kt_tab_table_4_3" role="tabpanel" aria-labelledby="kt_tab_table_4_3">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center table-hover table-checkable">
                            <thead>
                                <tr>
                                    <th class="p-0 w-50px"></th>
                                    <th class="p-0 min-w-120px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 w-80px"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($listOfBanks as $member)
                                <tr>
                                    <td class="pl-3 py-5">
                                        <div class="symbol symbol-45 symbol-light-success mr-2">
                                            <span class="symbol-label font-weight-bold">
                                                #{{ $member->id }}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="pl-0">
                                        <span class="text-muted font-weight-bold d-block">{{ __('Designation') }}</span>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ strtoupper($member->name) }}</span>
                                    </td>

                                    <td class=""></td>

                                    <td class="text-right">
                                        <span class="text-muted font-weight-bold d-block">{{ __('Number of Agencies') }}</span>
                                        <span class="text-dark-75 font-weight-bold d-block font-size-lg">{!! trans('commercial-agencies.td-number-agencies', ['number' => $member->numberOfAgencies]) !!}</span>
                                    </td>

                                    <td class="text-right">
                                        <span class="text-muted font-weight-bold d-block">{{ __('Created At') }}</span>
                                        <span class="text-dark-65 font-weight-bold">{{ Carbon\Carbon::parse(intval(substr($member->createdAt, 0, 10)))->format("d/m/Y H:i") }}</span>
                                    </td>

                                    <td class="text-right pr-5">
                                        <span class="font-weight-bolder text-info font-size-lg"></span>
                                    </td>

                                    <td class="text-right pr-2">
                                        <a href="{{ route('bank.edit', ['id' => $member->id]) }}" class="btn btn-icon btn-light-primary m-1">
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

                                        <a href="{{ route('bank.disable.id', ['id' => $member->id, 'name' => $member->name]) }}" onclick="return confirm('{{ __('validation.are-you-sure-bank') }}')" class="btn btn-icon btn-light-danger m-1">
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
                                <tr class="m-0">
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
                        <table class="table table-borderless table-vertical-center table-hover table-checkable">
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
                            @forelse ($listOfDisabledBanks as $member)
                                <tr>
                                    <td class="pl-3 py-5">
                                        <div class="symbol symbol-45 symbol-light-success mr-2">
                                            <span class="symbol-label font-weight-bold">
                                                #{{ $member->id }}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="pl-0">
                                        <span class="text-muted font-weight-bold d-block">{{ __('Designation') }}</span>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ strtoupper($member->name) }}</span>
                                    </td>

                                    <td class=""></td>

                                    <td class="text-right">
                                        <span class="text-muted font-weight-bold d-block">{{ __('Number of Agencies') }}</span>
                                        <span class="text-dark-75 font-weight-bold d-block font-size-lg">{!! trans('commercial-agencies.td-number-agencies', ['number' => $member->numberOfAgencies]) !!}</span>
                                    </td>

                                    <td class="text-right">
                                        <span class="text-muted font-weight-bold d-block">{{ __('Disabled At') }}</span>
                                        <span class="text-dark-65 font-weight-bold">{{ Carbon\Carbon::parse(intval(substr($member->deletedAt, 0, 10)))->format("d/m/Y H:i") }}</span>
                                    </td>

                                    <td class="text-right pr-5">
                                        <span class="font-weight-bolder text-info font-size-lg"></span>
                                    </td>

                                    <td class="text-right pr-2">
                                        <a href="{{ route('bank.edit', ['id' => $member->id]) }}" class="btn btn-icon btn-light-primary m-1">
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
                                    </td>
                                </tr>
                            @empty
                                <tr class="m-0">
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

</x-dashboard-commercial>
