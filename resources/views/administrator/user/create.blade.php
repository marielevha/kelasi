<x-dashboard-administrator>

	<x-slot name="title">
        @if(Route::currentRouteName() == 'user.create')
            {{ __('user.title') }}
        @elseif(Route::currentRouteName() == 'user.edit')
            {{ __('user.title_edit') }}
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
					<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Add-user.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24"/>
							<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
							<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
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
                    @if(Route::currentRouteName() == 'user.create')
                        {{ __('user.new_member') }}
                    @elseif(Route::currentRouteName() == 'user.edit')
                        {{ __('user.edit_member') }}
                    @endif
                </h5>
				<!--end::Page Title-->

				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
					<li class="breadcrumb-item text-muted">
                        <a href="{{ route('user.index') }}" class="text-muted">{{ __('Users') }}</a>
                    </li>

                    <li class="breadcrumb-item text-muted">
                        @if(Route::currentRouteName() == 'user.create')
                            <a href="#" class="text-muted">{{ __('user.adding_new_member') }}</a>
                        @elseif(Route::currentRouteName() == 'user.edit')
                            <a href="#" class="text-muted">{{ __('user.updating_member') }}</a>
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
			<div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('user.import_new_members_title') }}" data-placement="bottom">

				<a href="#" class="btn btn-light-primary font-weight-bolder px-5 px-5 my-1" data-toggle="modal" data-target="#modalImportNewMembers">

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

            @if(Route::currentRouteName() == 'user.create')

                <!--begin::Form-->
                <form method="POST" action="{{ route('user.store') }}">

                    @csrf

                    <!--begin::Card-->
                    <div class="card card-custom">

                            <!--begin::Header-->
                            <div class="card-header py-3">
                                <div class="card-title align-items-start flex-column">
                                    <h3 class="card-label font-weight-bolder text-dark">{{ __('user.account_information') }}</h3>
                                    <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('user.add_settings_account') }}</span>
                                </div>

                                <div class="card-toolbar">
                                    <button type="submit" class="btn btn-primary font-weight-bolder mr-2 pl-10 py-3" tabindex="7">{{ __('user.save_account') }}
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
                                    <a href="{{ route('user.index') }}" class="btn btn-light-primary font-weight-bolder" tabindex="8">{{ __('user.reset') }}</a>
                                </div>
                            </div>
                            <!--end::Header-->

                            <div class="form">
                                <div class="card-body">

                                    <!--begin::Heading-->
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mb-6">{{ __('user.account') }}</h5>
                                        </div>
                                    </div>

                                    <!--begin::Form Group $first_name -->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.first_name') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <input
                                                    type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="first_name"
                                                    placeholder="{{ __('user.enter_new_first_name') }}"
                                                    required
                                                    autofocus
                                                    tabindex="1"
                                                    title="Please enter a valid first name"
                                                    value="{{ old('first_name') }}"
                                                    />
                                            </div>
                                            <span class="form-text text-muted">{{ __('user.enter_displayble_name')}}</span>
                                        </div>
                                    </div>

                                    <!--begin::Form Group $last_name -->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.last_name') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <input
                                                    type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="last_name"
                                                    placeholder="{{ __('user.enter_new_last_name') }}"
                                                    required
                                                    autofocus
                                                    tabindex="1"
                                                    title="Please enter a valid last name"
                                                    value="{{ old('last_name') }}"
                                                    />
                                            </div>
                                            <span class="form-text text-muted">{{ __('user.enter_displayble_name')}}</span>
                                        </div>
                                    </div>

                                    <!--begin::Form Group $eamil -->
                                    <div class="form-group row">
                                        <label for="email" class="col-xl-3 col-lg-3 col-form-label">{{ __('user.email_address') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Mail-at.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z" fill="#000000"/>
                                                                </g>
                                                            </svg>
                                                                <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <input
                                                    id="email"
                                                    type="email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="email"
                                                    placeholder="{{ __('user.enter_new_email') }}"
                                                    tabindex="2"
                                                    required
                                                    pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                    title="{{ __('validation.placeholder-title-pattern-email') }}"
                                                    value="{{ old('email') }}"
                                                    />
                                            </div>
                                            <span class="form-text text-muted">{!! trans('validation.title-pattern-email') !!}</span>
                                        </div>
                                    </div>

                                    <!--begin::Form Group $phone -->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.contact_phone') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Devices/Phone.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M7.13888889,4 L7.13888889,19 L16.8611111,19 L16.8611111,4 L7.13888889,4 Z M7.83333333,1 L16.1666667,1 C17.5729473,1 18.25,1.98121694 18.25,3.5 L18.25,20.5 C18.25,22.0187831 17.5729473,23 16.1666667,23 L7.83333333,23 C6.42705272,23 5.75,22.0187831 5.75,20.5 L5.75,3.5 C5.75,1.98121694 6.42705272,1 7.83333333,1 Z" fill="#000000" fill-rule="nonzero"/>
                                                                    <polygon fill="#000000" opacity="0.3" points="7 4 7 19 17 19 17 4"/>
                                                                    <circle fill="#000000" cx="12" cy="21" r="1"/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <input
                                                    type="phone"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="phone"
                                                    placeholder="{{ __('user.enter_new_phone') }}"
                                                    tabindex="3"
                                                    required
                                                    pattern="^\+?[1-9][0-9]{7,14}$"
                                                    title="{{ __('validation.placeholder-title-pattern-phone') }}"
                                                    value="{{ old('phone') }}"
                                                    />
                                            </div>
                                            <span class="form-text text-muted">{!! trans('validation.title-pattern-phone') !!}</span>
                                        </div>
                                    </div>

                                    <!--begin::Form Group-->
                                    <div class="separator separator-dashed my-5"></div>

                                    <!--begin::Form Group-->
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mb-6">{{ __('user.security') }}</h5>
                                        </div>
                                    </div>

                                    <div class="form-group row align-items-center">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.profile') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="radio-inline">
                                                <label class="radio radio-rounded">
                                                    <input
                                                        type="radio"
                                                        {{ $profile == Str::lower(env('PROFILE_VIEWER')) ? 'checked="checked"' : '' }}
                                                        name="profile"
                                                        value="{{ env('PROFILE_VIEWER') }}"
                                                        tabindex="4"
                                                        readonly
                                                        />
                                                    <span></span>
                                                    {{ __('user.viewer') }}
                                                </label>

                                                <label class="radio radio-rounded">
                                                    <input
                                                        type="radio"
                                                        {{ $profile == Str::lower(env('PROFILE_ENTERPRISE')) ? 'checked="checked"' : '' }}
                                                        name="profile"
                                                        value="{{ env('PROFILE_ENTERPRISE') }}"
                                                        tabindex="5"
                                                        readonly
                                                        />
                                                    <span></span>
                                                    {{ __('user.enterprise') }}
                                                </label>

                                                <label class="radio radio-rounded radio-danger">
                                                    <input
                                                        type="radio"
                                                        {{ $profile == Str::lower(env('PROFILE_ADMIN')) ? 'checked="checked"' : '' }}
                                                        name="profile"
                                                        value="{{ env('PROFILE_ADMIN') }}"
                                                        tabindex="6"
                                                        readonly
                                                        />
                                                    <span></span>
                                                    {{ __('user.administrator') }}
                                                </label>
                                            </div>

                                            <p class="form-text text-muted py-2">
                                                <span class="font-weight-bolder text-danger">WARNING :</span>
                                                {{ __('user.warning_profile_message') }}
                                                <p class="mb-0 form-text text-muted">
                                                    <span class="text-danger font-weight-bolder mr-2">NOTE :</span> {{ __('user.warning_profile_note') }}</p>
                                            </p>
                                        </div>
                                    </div>

                                    <!--begin::Form Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.initial_password') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <span class="form-text text-muted">
                                                <p class="mt-4">
                                                    <span class="font-weight-bolder text-danger mt-3">IMPORTANT :</span>
                                                        {!! trans('user.current_initial_password') !!}
                                                    </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <!--end::Card-->

                </form>
                <!--end::Form-->

            @elseif(Route::currentRouteName() == 'user.edit')

                <!--begin::Form-->
                <form method="POST" action="{{ route('user.update', ['profile' => Str::lower($user->profile), 'email' => Str::lower($user->email)]) }}">
                    @method('PUT')
                    @csrf
                    <!--begin::Card-->
                        <div class="card card-custom">

                            <!--begin::Header-->
                            <div class="card-header py-3">
                                <div class="card-title align-items-start flex-column">
                                    <h3 class="card-label font-weight-bolder text-dark">{{ __('user.account_information') }}</h3>
                                    <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('user.update_settings_account') }}</span>
                                </div>

                                <div class="card-toolbar">
                                    <button type="submit" class="btn btn-primary font-weight-bolder mr-2 pl-10 py-3" tabindex="7">{{ __('user.save_account') }}
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
                                    <a href="{{ route('user.index') }}" type="reset" class="btn btn-light-primary font-weight-bolder" tabindex="8">{{ __('user.reset') }}</a>
                                </div>
                            </div>
                            <!--end::Header-->

                            <div class="form">
                                <div class="card-body">

                                    <!--begin::Heading-->
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mb-6">{{ __('user.account') }}</h5>
                                        </div>
                                    </div>

                                    <!--begin::Form Group $first_name -->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.first_name') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <input
                                                    type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="first_name"
                                                    placeholder="{{ __('user.enter_new_first_name') }}"
                                                    required
                                                    autofocus
                                                    tabindex="1"
                                                    title="Please enter a valid first name"
                                                    value="{{ old('name', $user->first_name) }}"
                                                />
                                            </div>
                                            <span class="form-text text-muted">{{ __('user.enter_displayble_name')}}</span>
                                        </div>
                                    </div>

                                    <!--begin::Form Group $last_name -->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.last_name') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <input
                                                    type="text"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="last_name"
                                                    placeholder="{{ __('user.enter_new_last_name') }}"
                                                    required
                                                    autofocus
                                                    tabindex="1"
                                                    title="Please enter a valid last name"
                                                    value="{{ old('name', $user->last_name) }}"
                                                />
                                            </div>
                                            <span class="form-text text-muted">{{ __('user.enter_displayble_name')}}</span>
                                        </div>
                                    </div>

                                    <!--begin::Form Group $email -->
                                    <div class="form-group row">
                                        <label for="email" class="col-xl-3 col-lg-3 col-form-label">{{ __('user.email_address') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Mail-at.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z" fill="#000000"/>
                                                                </g>
                                                            </svg>
                                                                <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <input
                                                    id="email"
                                                    type="email"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="email"
                                                    placeholder="{{ __('user.enter_new_email') }}"
                                                    tabindex="2"
                                                    required
                                                    readonly
                                                    pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                    title="{{ __('validation.placeholder-title-pattern-email') }}"
                                                    value="{{ old('email', $user->email) }}"
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
                                            <span class="form-text text-muted">{!! trans('validation.subtitle-email-readonly') !!}</span>
                                        </div>
                                    </div>

                                    <!--begin::Form Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.contact_phone') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <span class="svg-icon svg-icon-md">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Devices/Phone.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M7.13888889,4 L7.13888889,19 L16.8611111,19 L16.8611111,4 L7.13888889,4 Z M7.83333333,1 L16.1666667,1 C17.5729473,1 18.25,1.98121694 18.25,3.5 L18.25,20.5 C18.25,22.0187831 17.5729473,23 16.1666667,23 L7.83333333,23 C6.42705272,23 5.75,22.0187831 5.75,20.5 L5.75,3.5 C5.75,1.98121694 6.42705272,1 7.83333333,1 Z" fill="#000000" fill-rule="nonzero"/>
                                                                    <polygon fill="#000000" opacity="0.3" points="7 4 7 19 17 19 17 4"/>
                                                                    <circle fill="#000000" cx="12" cy="21" r="1"/>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <input
                                                    type="phone"
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="phone"
                                                    placeholder="{{ __('user.enter_new_phone') }}"
                                                    tabindex="3"
                                                    required
                                                    pattern="^\+?[1-9][0-9]{7,14}$"
                                                    title="{{ __('validation.placeholder-title-pattern-phone') }}"
                                                    value="{{ old('phone', $user->phone) }}"
                                                />
                                            </div>
                                            <span class="form-text text-muted">{!! trans('validation.title-pattern-phone') !!}</span>
                                        </div>
                                    </div>

                                    <!--begin::Form Group-->
                                    <div class="separator separator-dashed my-5"></div>

                                    <!--begin::Form Group-->
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mb-6">{{ __('user.security') }}</h5>
                                        </div>
                                    </div>

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
                                                    value="{{ $user->created_at->format("d/m/Y H:i") }}"
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
                                            <span class="form-text text-muted">{!! trans('validation.subtitle-created-at-readonly') !!}</span>
                                        </div>
                                    </div>

                                    <!--begin::Form Group $rofile -->
                                    <div class="form-group row align-items-center">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('user.profile') }}</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="radio-inline">
                                                <label class="radio radio-rounded">
                                                    <input
                                                        type="radio"
                                                        disabled
                                                        {{ Str::lower($user->profile) == env('PROFILE_VIEWER') ? 'checked="checked"' : '' }}
                                                        name="profile"
                                                        value="{{ env('PROFILE_VIEWER') }}"
                                                        tabindex="4"
                                                    />
                                                    <span></span>
                                                    {{ __('user.viewer') }}
                                                </label>

                                                <label class="radio radio-rounded">
                                                    <input
                                                        type="radio"
                                                        disabled
                                                        {{ Str::lower($user->profile) == env('PROFILE_ENTERPRISE') ? 'checked="checked"' : '' }}
                                                        name="profile"
                                                        value="{{ env('PROFILE_ENTERPRISE') }}"
                                                        tabindex="5"
                                                    />
                                                    <span></span>
                                                    {{ __('user.enterprise') }}
                                                </label>

                                                <label class="radio radio-rounded radio-danger">
                                                    <input
                                                        type="radio"
                                                        disabled
                                                        {{ Str::lower($user->profile) == env('PROFILE_ADMIN') ? 'checked="checked"' : '' }}
                                                        name="profile"
                                                        value="{{ env('PROFILE_ADMIN') }}"
                                                        tabindex="6"
                                                    />
                                                    <span></span>
                                                    {{ __('user.administrator') }}
                                                </label>
                                            </div>
                                            <p class="form-text text-muted py-2">
                                                <span class="font-weight-bolder text-danger">WARNING :</span>
                                                    {!! trans('validation.subtitle-profile-readonly') !!}
                                            </p>
                                        </div>
                                    </div>

                                    @if ($user->deletedAt)
                                        <!--begin::Form Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                            <div class="col-lg-9 col-xl-9">
                                                <a href="{{ route('users.enable.email', ['email' => $user->email]) }}" onclick="return confirm('{{ __('validation.are-you-sure-enable', ['email' => $user->email]) }}')" type="button" class="btn btn-light-primary font-weight-bold btn-sm">{{ __('user.enable_account') }}</a>
                                                <p class="form-text text-muted py-2">
                                                    <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                                    {!! trans('user.enable_account_message', ['deletedAt' => Carbon\Carbon::parse(intval(substr($user->deletedAt, 0, 10)))->format("d/m/Y H:i")]) !!}
                                                </p>
                                            </div>
                                        </div>
                                    @else

                                        <!--begin::Form Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                            <div class="col-lg-9 col-xl-9">
                                                <a href="{{ route('users.reset.password.email', ['email' => $user->email]) }}" onclick="return confirm('{{ __('validation.are-you-sure-password', ['email' => $user->email]) }}')" type="button" class="btn btn-light-danger font-weight-bold btn-sm">{{ __('user.send-change-password') }}</a>
                                                <p class="form-text text-muted py-2">
                                                    <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                                    {!! trans('user.subtitle-reset-password', ['email' => $user->email]) !!}
                                                </p>
                                            </div>
                                        </div>

                                        @if(!$user->activatedAt)
                                            <!--begin::Form Group-->
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <a href="{{ route('users.resendAccountActivationLink', ['email' => $user->email]) }}" onclick="return confirm('{{ __('validation.are-you-sure-activate', ['email' => $user->email]) }}')" type="button" class="btn btn-light-info font-weight-bold btn-sm">{{ __('user.activate_account') }}</a>
                                                    <p class="form-text text-muted py-2">
                                                        <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                                        {!! trans('user.subtitle-activation-user', ['email' => $user->email]) !!}
                                                    </p>
                                                </div>
                                            </div>
                                        @endif

                                        <!--begin::Form Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                            <div class="col-lg-9 col-xl-9">
                                                @if($user->activatedAt)
                                                    <p class="form-text text-muted py-2">{!! trans('user.disable_account_message', ['activatedAt' => Carbon\Carbon::parse(intval(substr($user->activatedAt, 0, 10)))->format("d/m/Y H:i")]) !!}</p>
                                                @endif
                                                <a href="{{ route('users.disable.email', ['email' => $user->email]) }}" onclick="return confirm('{{ __('validation.are-you-sure', ['email' => $user->email]) }}')" type="button" class="btn btn-light-danger font-weight-bold btn-sm">{{ __('user.disable_account') }}</a>
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

</x-dashboard-administrator>
