<x-dashboard-administrator>

	<x-slot name="title">
        @if(Route::currentRouteName() == 'city.create')
            {{ __('commercial-agencies.title-create') }}
        @elseif(Route::currentRouteName() == 'city.edit')
            {{ __('commercial-agencies.title-edit') }}
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
                    @if(Route::currentRouteName() == 'city.create')
                        {{ __('commercial-agencies.title-create') }}
                    @elseif(Route::currentRouteName() == 'city.edit')
                        {{ __('commercial-agencies.title-edit') }}
                    @endif
                </h5>
				<!--end::Page Title-->

				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('city.index') }}" class="text-muted">{{ __('Cities') }}</a>
                    </li>

					<li class="breadcrumb-item text-muted">
                        @if(Route::currentRouteName() == 'city.create')
                            <a href="#" class="text-muted">{{ __('Adding New City') }}</a>
                        @elseif(Route::currentRouteName() == 'city.edit')
                            <a href="#" class="text-muted">{{ __('Updating City') }}</a>
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
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Countries Actions') }}"
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
                            <a href="{{ route('country.create') }}" class="navi-link px-5 py-5 font-weight-bold">
                                <span class="navi-text">{{ __('Add New Country') }}</span>
                            </a>
                        </li>

                        <div class="separator separator-dashed"></div>

                        <li class="navi-item">
                            <a href="{{ route('country.index') }}" class="navi-link px-5 py-5 font-weight-bold">
                                <span class="navi-text text-danger">{{ __('List Of Country') }}</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
            </div>
            <!--end::Dropdown-->

			<!--begin::Dropdown-->
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Import an .csv file of the following format: code; designation; address; country ID; region ID;') }}" data-placement="bottom">
                <a href="#" class="btn btn-light-info font-weight-bolder px-5 px-5 my-1" data-toggle="modal" data-target="#modalImportNewAgencies">
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
                    {{ __('Import New Agencies') }}
                </a>
            </div>
			<!--end::Dropdown-->
		</div>
		<!--end::Toolbar-->

        <div class="modal fade" id="modalImportNewAgencies" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{ __('Import New Agencies') }}
                        </h5>
                        <button type="button" class="btn btn-light btn-text-danger btn-hover-text-danger font-weight-bold" data-dismiss="modal" aria-label="Close">
                            {{ __('dashboard.close') }}
                        </button>
                    </div>
                    <div class="modal-body mx-5">
                        <form method="POST" action="{{ route('city.upload.import.members') }}" id="importAgencies" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bold mb-4">Import Members Model</label>
                                <a href="{{ route('city.download.import.members') }}" type="button" class="btn btn-light-primary btn-lg py-8 btn-block">
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
                                    {!! trans('You must Import this .csv file in the following format: <code class="font-size-sm">code; designation; address; country ID; region ID;</code>. It will help you to facilitate the import of new countries of the organization.') !!}
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
                                        <input type="file" class="custom-file-input " id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="importMember" accept="text/csv" onchange="document.getElementById('importAgencies').submit();">
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

            @if(Route::currentRouteName() == 'city.create')
                <!--begin::Form-->
                <form method="POST" action="{{ route('city.store') }}">
                    @csrf
                    <!--begin::Card - HEADER-->
                    <div class="card card-custom gutter-b" id="kt_page_sticky_card">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">{{ __('City Information') }}</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('Add Settings for this City') }}</span>
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
                                <a href="{{ route("city.index") }}" class="btn btn-light-primary font-weight-bolder" tabindex="8">{{ __('user.reset') }}</a>
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

                                <!--begin::Form Group $name-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('City Name') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg form-control-solid"
                                                name="name"
                                                placeholder="{{ __('Please enter a name') }}"
                                                required
                                                title="Please enter a valid name"
                                                value="{{ old('name') }}"
                                            />
                                        </div>
                                        <span class="form-text text-muted">{!! trans('This name will be displayed publicly. It must be <code class"font-size-sm">unique</code> and <code class"font-size-sm">cannot be modified</code>.') !!}</span>
                                    </div>
                                </div>

                                <!--begin::Form Group $description-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('City Description') }}</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <textarea
                                                class="form-control form-control-lg form-control-solid"
                                                name="description" rows="5"
                                                placeholder="{{ __('Please enter an description') }}"
                                                title="{{ __('Please enter an valid description') }}"
                                            >{{ old('description')  }}</textarea>
                                        </div>
                                        <span class="form-text text-muted">{{ __('Please provide a text description of the city.')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-custom">
                        <div class="form">
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">{{ __('Country') }}</h5>
                                    </div>
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Choose Country') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid pr-3">
                                            <select
                                                class="form-control form-control-lg form-control-solid"
                                                name="country"
                                                required >
                                                @forelse($countries as $country)
                                                    <option value="{{ $country->id }}">{{ ucfirst($country->name) }}</option>
                                                @empty
                                                    <option value="0" selected>None</option>
                                                @endforelse
                                            </select>
                                        </div>
                                        <span class="form-text text-muted">{!! trans('Please choose the country the agency belongs to from the items in this list. If it does not exist, you can <code class="font-size-sm">create it</code>.') !!}</span>
                                    </div>
                                    <div class="col-lg-3 col-xl-3">
                                        <a href="{{ route('country.create') }}" class="btn btn-primary btn-lg" onclick="return confirm('{{ __('Are you sure you want to continue ? If so, you will be redirected to another page.') }}')">Add New Country</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->
                </form>
                <!--end::Form-->
            @elseif(Route::currentRouteName() == 'city.edit')
                <!--begin::Form-->
                <form method="POST" action="{{ route('city.update', ['slug' => Str::lower($city->slug)]) }}">
                    @method('PUT')
                    @csrf

                    <!--begin::Card - HEADER-->
                    <div class="card card-custom gutter-b" id="kt_page_sticky_card">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">{{ __('City Information') }}</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">{{ __('Update Settings for this City') }}</span>
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
                                <a href="{{ route("city.index") }}" class="btn btn-light-primary font-weight-bolder" tabindex="8">{{ __('user.reset') }}</a>
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

                                <!--begin::Form Group $slug-->
                                {{--<div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('City Slug') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg form-control-solid"
                                                name="slug"
                                                placeholder="{{ __('Please enter a valid code for this city') }}"
                                                required
                                                readonly
                                                title="Please enter a valid slug for this city"
                                                value="{{ old('code', $city->slug) }}"
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
                                        <span class="form-text text-muted">{!! trans('This Code is <code class"font-size-sm">unique</code> and <code class"font-size-md">cannot be modified</code>.') !!}</span>
                                    </div>
                                </div>--}}

                                <!--begin::Form Group $name-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('City Name') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg form-control-solid"
                                                name="name"
                                                placeholder="{{ __('Please enter a name') }}"
                                                required
                                                autofocus
                                                title="Please enter a valid name"
                                                value="{{ old('name', $city->name) }}"
                                            />
                                        </div>
                                        <span class="form-text text-muted">{{ __('This Name will be publicly displayed.')}}</span>
                                    </div>
                                </div>

                                <!--begin::Form Group $description-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('City Description') }}</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                        <textarea
                                            class="form-control form-control-lg form-control-solid"
                                            name="description" rows="5"
                                            placeholder="{{ __('Please enter an description') }}"
                                            title="{{ __('Please enter an valid description') }}"
                                        >{{ old('description', $city->description)  }}</textarea>
                                        </div>
                                        <span class="form-text text-muted">{{ __('Please provide a text description of the city.')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="form">
                            <div class="card-body">
                                <!--begin::Heading-->
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">{{ __('Country') }}</h5>
                                    </div>
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Choose Country') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid pr-3">
                                            <select
                                                class="form-control form-control-lg form-control-solid"
                                                name="country"
                                                required >
                                                @forelse($countries as $country)
                                                    <option value="{{ $country->id }}" @if($country->id == $city->country->id) selected @endif>{{ ucfirst($country->name) }}</option>
                                                @empty
                                                    <option value="0" selected>None</option>
                                                @endforelse
                                            </select>
                                        </div>
                                        <span class="form-text text-muted">{!! trans('Please choose the country the agency belongs to from the items in this list. If it does not exist, you can <code class="font-size-sm">create it</code>.') !!}</span>
                                    </div>
                                    <div class="col-lg-3 col-xl-3">
                                        <a href="{{ route('country.create') }}" class="btn btn-primary btn-lg" onclick="return confirm('{{ __('Are you sure you want to continue ? If so, you will be redirected to another page.') }}')">Add New Country</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->

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
                                                value="{{ $city->created_at->format("d/m/Y H:i") }}"
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
                                        <span class="form-text text-muted">{!! trans('This is the date of creation of this city. This value cannot be changed.') !!}</span>
                                    </div>
                                </div>

                                @if ($city->deleted_at)
                                    <!--begin::Form Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <a href="{{ route('city.enable.id', ['slug' => $city->slug, 'name' => $city->name]) }}" onclick="return confirm('{{ __('Are you sure you want to enable this City ?') }}')" type="button" class="btn btn-light-primary font-weight-bold btn-sm">{{ __('Enable this City?') }}</a>
                                            <p class="form-text text-muted py-2">
                                                <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                                {!! trans('This City has been inactive since <code class="font-size-sm">:deleted_at</code>. If it is useful, you can enable it.', ['deleted_at' => Carbon\Carbon::parse(intval(substr($city->deleted_at, 0, 10)))->format("d/m/Y H:i")]) !!}
                                            </p>
                                        </div>
                                    </div>
                                @else
                                    <!--begin::Form Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <a href="{{ route('city.disable.id', ['slug' => $city->slug, 'name' => $city->name]) }}" onclick="return confirm('{{ __('Are you sure you want to close this City ?') }}')" type="button" class="btn btn-light-info font-weight-bold btn-sm">{{ __('Close this City?') }}</a>
                                            <p class="form-text text-muted py-2">
                                                <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                                {!! trans('If you choose to close this agency, it will automatically be deactivated and will no longer be usable in your operations.') !!}
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
</x-dashboard-administrator>
