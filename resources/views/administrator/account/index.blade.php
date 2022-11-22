<x-dashboard-administrator>

    <x-slot name="title">
        {{ __('account.title') }}
    </x-slot>

    <x-slot name="local_link">
        <!--begin::Page Custom Styles(used by this page)-->
        <link href="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/css/pages/wizard/wizard-4.css?v=2.1.1" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles-->
    </x-slot>

    <x-slot name="local_script">
        <!--begin::Page Scripts(used by this page)-->
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/custom/user/add-user.js?v=2.1.1"></script>
        <!--end::Page Scripts-->
    </x-slot>

    <x-slot name="header">
        <!--begin::Header Nav-->
        <ul class="menu-nav">
            <li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <span class="menu-text">{{ __('account.dashboard') }}</span>
                </a>
            </li>
            <li class="menu-item menu-item-active" aria-haspopup="true">
                <a href="{{ route('user.index') }}" class="menu-link">
                    <span class="menu-text">{{ __('account.users') }}</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
                <a href="{{ route('audit.index') }}" class="menu-link">
                    <span class="menu-text">{{ __('account.audit_trails') }}</span>
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
					<!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/General/User.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24"/>
							<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
							<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
						</g>
					</svg>
                    <!--end::Svg Icon-->
				</span>
            </button>
            <!--end::Aside Toggle-->

            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('account.title') }}</h5>
                <!--end::Page Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted">{{ __('account.users') }}</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted">{{ __('account.subheader', ['name' => Str::ucfirst(Str::lower(Auth::user()->name))]) }}</a>
                    </li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
    </x-slot>

    <x-alert-error class="mb-4" :message="__('user.see_changes')" />

    @if($message = Session::get('error'))
        <x-alert-error class="mb-4" :message="$message" />
    @endif

    @if($message = Session::get('info'))
        <x-alert-info class="mb-4" :message="$message" />
    @endif

    <form  method="POST" action="{{ route('account.update') }}">
    @method('PUT')
    @csrf

    <!--begin::Tables Widget 4-->
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header py-5">
                <h3 class="card-title">
                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">{{ __('account.user_profile_details') }}</span>
                </h3>

                <div class="card-toolbar">
                    <button tabindex="4" type="submit" onclick="return confirm('{{ __('validation.are-you-sure-continue') }}')" class="btn btn-primary btn-lg font-weight-bolder py-3">
                        <span class="svg-icon svg-icon-md mr-3">
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
                        {{ __('account.save_changes') }}
                    </button>
                </div>
            </div>
            <!--end::Header-->
        </div>
        <!--end::Tables Widget 4-->

        <!--begin::Card-->
        <div class="card card-custom">
            <!--begin::Body-->
            <div class="card-body p-0">
                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-10">
                        <!--begin::Wizard Form-->
                        <div class="form">
                            <div class="row justify-content-center">
                                <div class="col-xl-9">
                                    <!--begin::Wizard Step 1-->
                                    <div class="mt-2 step">

                                        <!--begin::Heading-->
                                        <div class="row mb-5">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h5 class="font-weight-bold mb-6">{{ __('user.account') }}</h5>
                                            </div>
                                        </div>

                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">{{ __('account.name') }}</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input
                                                    class="form-control form-control-solid form-control-lg"
                                                    name="name"
                                                    type="text"
                                                    value="{{ Auth::user()->name }}"
                                                    placeholder="{{ __('enter_new_name') }}"
                                                    required
                                                    autofocus
                                                    title="Please enter a valid name"
                                                    tabindex="1"
                                                />
                                            </div>
                                        </div>
                                        <!--end::Group-->

                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">{{ __('account.email_address') }}</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="input-group input-group-solid input-group-lg">
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
                                                        readonly
                                                        type="email"
                                                        class="form-control form-control-solid form-control-lg"
                                                        {{-- name="email"--}}
                                                        value="{{ Auth::user()->email }} "
                                                        placeholder="{{ __('account.enter_new_email') }}"
                                                        required
                                                        pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                        title="{{ __('validation.placeholder-title-pattern-email') }}"
                                                        tabindex="2"
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
                                                <span class="form-text text-muted">{!! trans('validation.title-pattern-email') !!}</span>
                                            </div>
                                        </div>
                                        <!--end::Group-->

                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">{{ __('account.contact_phone') }}</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="input-group input-group-solid input-group-lg">
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
                                                        type="text"
                                                        class="form-control form-control-solid form-control-lg"
                                                        name="phone"
                                                        value="{{ Auth::user()->phone }}"
                                                        placeholder="{{ __('account.enter_new_phone') }}"
                                                        required
                                                        pattern="^\+?[1-9][0-9]{7,14}$"
                                                        title="{{ __('validation.placeholder-title-pattern-phone') }}"
                                                        tabindex="3"
                                                    />
                                                </div>
                                                <span class="form-text text-muted">{!! trans('validation.title-pattern-phone') !!}</span>
                                            </div>
                                        </div>
                                        <!--end::Group-->

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
                                        <div class="form-group row mt-5">
                                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                            <div class="col-lg-9 col-xl-9">
                                                <a href="{{ route('users.reset.password.email', ['email' => Auth::user()->email]) }}" onclick="return confirm('{{ __('validation.are-you-sure-password', ['email' => Auth::user()->email]) }}')" type="button" class="btn btn-light-danger font-weight-bold btn-sm">{{ __('user.send-change-password') }}</a>
                                                <p class="form-text text-muted py-2">
                                                    <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                                    {!! trans('user.subtitle-reset-password', ['email' => Auth::user()->email]) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1-->
                                </div>
                            </div>
                        </div>
                        <!--end::Wizard Form-->
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </form>

</x-dashboard-administrator>
