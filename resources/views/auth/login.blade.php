<x-guest-layout>

    <x-slot name="title">{{ __('login.title') }}</x-slot>

    <x-slot name="local_link">

        <!--begin::Page Custom Styles(used by this page)-->
        <link href="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/css/pages/login/login-1.css?v=2.1.1" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles-->

    </x-slot>

    <x-slot name="local_script">

        <!--begin::Page Scripts(used by this page)-->
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/custom/login/login.js?v=2.1.1"></script>
        <!--end::Page Scripts-->

    </x-slot>

    <div class="d-flex flex-column flex-root">

        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white">

            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #7EBFDB;">
                <!--begin::Aside Top-->
                <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                    <!--begin::Aside header-->
                    <a href="#" class="text-center mb-15">
                        <img src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/media/logos/logo-5.svg"
                            alt="logo" class="h-70px" />
                    </a>
                    <!--end::Aside header-->
                    <!--begin::Aside title-->
                    <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">{{ __('login.aside_subheader_1')}}
                        <br />{{ __('login.aside_subheader_2') }}
                    </h3>
                    <!--end::Aside title-->
                </div>
                <!--end::Aside Top-->
                <!--begin::Aside Bottom-->
                <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center"
                    style="background-image: url(https://preview.keenthemes.com/keen/theme/demo6/dist/assets/media/svg/illustrations/payment.svg)">
                </div>
                <!--end::Aside Bottom-->
            </div>
            <!--begin::Aside-->

            <!--begin::Content-->
            <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        @if($message = Session::get('error'))
                            <x-alert-error class="mb-4" :message="$message" />
                        @endif

                        @if($message = Session::get('info'))
                            <x-alert-info class="mb-4" :message="$message" />
                        @endif

                        <!--begin::Form-->
                        <form class="form" method="POST" action="{{ route('login') }}">

                            @csrf

                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">{{ __('login.welcome_to', ['name' => config('app.name', 'Laravel')]) }}
                                </h3>
                                <span class="text-muted font-weight-bold font-size-h4">{{ __('login.enter_credentials_login') }}</span>
                            </div>
                            <!--begin::Title-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <label for="email" class="font-size-h6 font-weight-bolder text-dark">{{ __('Email') }}</label>
                                <input
                                    id="email"
                                    class="form-control form-control-solid h-auto p-6 rounded-lg"
                                    type="email"
                                    name="email"
                                    required
                                    autofocus
                                    placeholder="{{ __('validation.attributes.email-placeholder') }}"
                                    {{-- value="evenma.org@gmail.com" --}}
                                    value="{{ old('email') }}"
                                    pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                    title="{{ __('validation.placeholder-title-pattern-email') }}"
                                    tabindex="1"
                                    />
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">{{ __('Password') }}</label>

                                    @if (Route::has('password.request'))
                                        <a
                                            href="{{ route('password.request') }}"
                                            class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5"
                                            id="kt_login_forgot"
                                            >
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                                <input
                                    id="password"
                                    class="form-control form-control-solid h-auto p-6 rounded-lg"
                                    type="password"
                                    name="password"
                                    {{-- value="password" --}}
                                    required
                                    placeholder="{{ __('validation.attributes.password-placeholder') }}"
                                    autocomplete="current-password"
                                    {{-- pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*.!@$%^&(){}[]:;<>,.?/~_+-=|\]).{8,32}$" --}}
                                    title="{{ __('validation.placeholder-title-pattern-password') }}"
                                    tabindex="2"
                                    />
                            </div>
                            <!--end::Form group-->

                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">

                                <button
                                    tabindex="3"
                                    type="submit"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3"
                                    >
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/General/Unlock.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <mask fill="white">
                                                    <use xlink:href="#path-1"/>
                                                </mask>
                                            <g/>
                                            <path d="M15.6274517,4.55882251 L14.4693753,6.2959371 C13.9280401,5.51296885 13.0239252,5 12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L14,10 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C13.4280904,3 14.7163444,3.59871093 15.6274517,4.55882251 Z" fill="#000000"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    {{ __('Log in') }}
                                </button>

                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Content body-->

                <!--begin::Content footer-->
                <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                    <a href="#" class="text-primary font-weight-bolder font-size-h5">{{ __('login.terms') }}</a>
                    <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">{{ __('login.plans') }}</a>
                    <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">{{ __('login.contact_us') }}</a>
                </div>
                <!--end::Content footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->

    </div>

</x-guest-layout>
