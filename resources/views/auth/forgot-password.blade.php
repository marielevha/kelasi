<x-guest-layout>

    <x-slot name="title">Forgotten Password ?</x-slot>

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
                    <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg text-white">{{ __('forgot.aside_subheader_1') }}
                        <br />{{ __('forgot.aside_subheader_2') }}
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
                        <form class="form" method="POST" action="{{ route('password.email') }}">

                            @csrf

                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">{{ __('forgot.forgotten_password') }} </h3>
                                <p class="text-muted font-weight-bold font-size-h4">{{ __('forgot.enter_email_reset_password') }}</p>
                            </div>
                            <!--end::Title-->

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
                                    value="{{ old('email') }}"
                                    pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                    title="{{ __('validation.placeholder-title-pattern-email') }}"
                                    tabindex="1"
                                    />
                            </div>
                            <!--end::Form group-->

                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">

                                <button
                                    type="submit"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3"
                                    tabindex="2"
                                    >
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Readed-mail.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" fill="#000000"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    {{ __('Email Password Reset Link') }}
                                </button>

                                <a href="{{ route('login') }}" type="reset" id="kt_login_forgot_cancel"
                                        class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">{{ __('Cancel') }}</a>
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
                    <a href="#" class="text-primary font-weight-bolder font-size-h5">{{ __('forgot.terms') }}</a>
                    <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">{{ __('forgot.plans') }}</a>
                    <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">{{ __('forgot.contact_us') }}</a>
                </div>
                <!--end::Content footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->

    </div>

</x-guest-layout>
