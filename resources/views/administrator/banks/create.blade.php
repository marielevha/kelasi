<x-dashboard-commercial>

	<x-slot name="title">
        @if(Route::currentRouteName() == 'bank.create')
            {{ __('Add a New Bank') }}
        @elseif(Route::currentRouteName() == 'bank.edit')
            {{ __('Edit a Bank') }}
        @endif
	</x-slot>

	<x-slot name="local_link"></x-slot>

	<x-slot name="local_script">
		<!--begin::Page Scripts(used by this page)-->
		<script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/widgets.js?v=2.1.1"></script>
		<script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/custom/profile/profile.js?v=2.1.1"></script>
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
					<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Add-user.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                            <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
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
                    @if(Route::currentRouteName() == 'bank.create')
                        {{ __('Add New Bank') }}
                    @elseif(Route::currentRouteName() == 'bank.edit')
                        {{ __('Edit Bank') }}
                    @endif
                </h5>
				<!--end::Page Title-->

				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('agencies.index') }}" class="text-muted">{{ __('Agencies') }}</a>
                    </li>

                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('banks.index') }}" class="text-muted">{{ __('Banks') }}</a>
                    </li>

					<li class="breadcrumb-item text-muted">
                        @if(Route::currentRouteName() == 'bank.create')
                            <a href="#" class="text-muted">{{ __('Adding a new Bank') }}</a>
                        @elseif(Route::currentRouteName() == 'bank.edit')
                            <a href="#" class="text-muted">{{ __('Updating a Bank') }}</a>
                        @endif
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

	<!--begin::Profile Account Information-->
	<div class="d-flex flex-row">
		<!--begin::Content-->
		<div class="flex-row-fluid ml-lg-8">
			<!-- Validation Errors -->
			<x-auth-validation-errors class="mb-4" :errors="$errors" />

            @if($message = Session::get('error'))
                <x-alert-error class="mb-4" :message="$message" />
            @endif

            @if($message = Session::get('info'))
                <x-alert-info class="mb-4" :message="$message" />
            @endif

            @if(Route::currentRouteName() == 'bank.create')
                <!--begin::Form-->
                <form method="POST" action="{{ route('bank.store') }}">
                    @csrf

                    <!--begin::Card - HEADER-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">{{ __('Bank Information') }}</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('Add Settings for this Bank') }}</span>
                            </div>

                            <div class="card-toolbar">
                                <button type="submit" class="btn btn-primary font-weight-bolder mr-2 pl-10 py-3" tabindex="7">{{ __('Save Changes') }}
                                    <span class="svg-icon svg-icon-md ml-3">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/General/Save.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z" fill="#000000" fill-rule="nonzero"/>
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="5" rx="0.5"/>
                                        </g>
                                    </svg>
                                        <!--end::Svg Icon-->
                                </span>
                                </button>
                                <a href="{{ route("banks.index") }}" class="btn btn-light-primary font-weight-bolder" tabindex="8">{{ __('user.reset') }}</a>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card - HEADER-->

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="form">
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">{{ __('Information') }}</h5>
                                    </div>
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Bank Designation') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg form-control-solid"
                                                name="designation"
                                                placeholder="{{ __('Please enter a designation') }}"
                                                required
                                                title="Please enter a valid designation"
                                                value="{{ old('designation') }}"
                                            />
                                        </div>
                                        <span class="form-text text-muted">{{ __('This Designation will be publicly displayed.')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->
                </form>
                <!--end::Form-->
            @elseif(Route::currentRouteName() == 'bank.edit')
                <!--begin::Form-->
                <form method="POST" action="{{ route('bank.update', ['id' => $bank->id]) }}">
                    @method('PUT')
                    @csrf

                    <!--begin::Card - HEADER-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">{{ __('Bank Information') }}</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('Add Settings for this Bank') }}</span>
                            </div>

                            <div class="card-toolbar">
                                <button type="submit" class="btn btn-primary font-weight-bolder mr-2 pl-10 py-3" tabindex="7">{{ __('Save Changes') }}
                                    <span class="svg-icon svg-icon-md ml-3">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/General/Save.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z" fill="#000000" fill-rule="nonzero"/>
                                        <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="5" rx="0.5"/>
                                    </g>
                                </svg>
                                        <!--end::Svg Icon-->
                            </span>
                                </button>
                                <a href="{{ route("banks.index") }}" class="btn btn-light-primary font-weight-bolder" tabindex="8">{{ __('user.reset') }}</a>
                            </div>
                        </div>
                        <!--end::Header-->
                    </div>
                    <!--end::Card - HEADER-->

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="form">
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">{{ __('Information') }}</h5>
                                    </div>
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Bank Designation') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg form-control-solid"
                                                name="designation"
                                                placeholder="{{ __('Please enter a designation') }}"
                                                required
                                                title="Please enter a valid designation"
                                                value="{{ old('designation', $bank->name) }}"
                                            />
                                        </div>
                                        <span class="form-text text-muted">{{ __('This Designation will be publicly displayed.')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->

                    @if($bank->agencies)
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                                <div class="form">
                                    <div class="card-body">
                                        <!--begin::Heading-->
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h5 class="font-weight-bold mb-6">{{ __('Agencies belonging to this bank.') }}</h5>
                                            </div>
                                        </div>
                                        <!--begin::Heading-->

                                        <div class="row">
                                            <label class="col-xl-3">{!! trans('List of Agencies') !!}</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr class="table-active">
                                                        <th scope="col" class="pl-5">{!! trans('Region') !!}</th>
                                                        <th scope="col" class="pl-5">{!! trans('Agency Designation') !!}</th>
                                                        <th scope="col" class="pl-5 w-40px"></th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    @foreach($bank->agencies as $agency)
                                                        <tr>
                                                            <td class="pl-5 text-muted font-weight-bold bg-gray-100 align-middle">{{ strtoupper($agency->region->designation) }}</td>
                                                            <th scope="row" class="pl-5 align-middle">{{ ucfirst($agency->designation) }}</th>
                                                            <td class="align-middle">
                                                                <a href="{{ route('agency.edit', ['id' => $agency->id]) }}" class="btn btn-icon btn-light-primary m-1">
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
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--end::Card-->
                    @endif

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="form">
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">{{ __('Security') }}</h5>
                                    </div>
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.created_at') }}</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Home/Timer.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" fill="#000000" opacity="0.3"/>
                                                            <path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" fill="#000000"/>
                                                            <path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" fill="#000000"/>
                                                            <path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            </div>

                                            <input
                                                type="text"
                                                class="form-control form-control-lg form-control-solid"
                                                disabled
                                                value="{{ Carbon\Carbon::parse(intval(substr($bank->createdAt, 0, 10)))->format("d/m/Y H:i") }}"
                                            />

                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <span class="svg-icon svg-icon-danger svg-icon-md">
                                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/General/Lock.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <mask fill="white">
                                                                    <use xlink:href="#path-1"/>
                                                                </mask>
                                                                <g/>
                                                                <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"/>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">{!! trans('This is the date of creation of this agency. This value cannot be changed.') !!}</span>
                                    </div>
                                </div>

                            @if ($bank->deletedAt)
                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                    <div class="col-lg-9 col-xl-9">
                                        <a href="{{ route('bank.enable.id', ['id' => $bank->id, 'name' => $bank->name]) }}" onclick="return confirm('{{ __('Are you sure you want to enable this Bank ?') }}')" type="button" class="btn btn-light-primary font-weight-bold btn-sm">{{ __('Enable this Bank?') }}</a>
                                        <p class="form-text text-muted py-2">
                                            <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                            {!! trans('This Bank has been inactive since <code class="font-size-sm">:deletedAt</code>. If it is useful, you can enable it.', ['deletedAt' => Carbon\Carbon::parse(intval(substr($bank->deletedAt, 0, 10)))->format("d/m/Y H:i")]) !!}
                                        </p>
                                    </div>
                                </div>
                            @else
                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                    <div class="col-lg-9 col-xl-9">
                                        <a href="{{ route('bank.disable.id', ['id' => $bank->id, 'name' => $bank->name]) }}" onclick="return confirm('{{ __('Are you sure you want to close this Bank ?') }}')" type="button" class="btn btn-light-info font-weight-bold btn-sm">{{ __('Disable this Bank?') }}</a>
                                        <p class="form-text text-muted py-2">
                                            <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                            {!! trans('If you choose to disable this bank, it will no longer be usable in your operations.') !!}
                                        </p>
                                    </div>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->
                </form>
                <!--end::Form-->
            @endif
		</div>
		<!--end::Content-->
    </div>
	<!--end::Profile Account Information-->

</x-dashboard-commercial>
