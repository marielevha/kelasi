<x-guest-layout>

    <x-slot name="title">Check Your Email Address</x-slot>

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
                        <form class="form" method="GET" action="{{ route('login') }}">

                            @csrf
                            <!--begin::Title-->
                            <div class="pb-10 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg pb-3">{{ __('check-email.title_check_email') }} </h3>
                                <p class="text-muted font-weight-bold font-size-h4">{{ __('check-email.message_check_email') }}</p>
                            </div>
                            <!--end::Title-->

                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">

                                <button
                                    type="submit"
                                    autofocus
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3"
                                    >
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Code/Backspace.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M8.42034438,20 L21,20 C22.1045695,20 23,19.1045695 23,18 L23,6 C23,4.8954305 22.1045695,4 21,4 L8.42034438,4 C8.15668432,4 7.90369297,4.10412727 7.71642146,4.28972363 L0.653241109,11.2897236 C0.260966303,11.6784895 0.25812177,12.3116481 0.646887666,12.7039229 C0.648995955,12.7060502 0.651113791,12.7081681 0.653241109,12.7102764 L7.71642146,19.7102764 C7.90369297,19.8958727 8.15668432,20 8.42034438,20 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M12.5857864,12 L11.1715729,10.5857864 C10.7810486,10.1952621 10.7810486,9.56209717 11.1715729,9.17157288 C11.5620972,8.78104858 12.1952621,8.78104858 12.5857864,9.17157288 L14,10.5857864 L15.4142136,9.17157288 C15.8047379,8.78104858 16.4379028,8.78104858 16.8284271,9.17157288 C17.2189514,9.56209717 17.2189514,10.1952621 16.8284271,10.5857864 L15.4142136,12 L16.8284271,13.4142136 C17.2189514,13.8047379 17.2189514,14.4379028 16.8284271,14.8284271 C16.4379028,15.2189514 15.8047379,15.2189514 15.4142136,14.8284271 L14,13.4142136 L12.5857864,14.8284271 C12.1952621,15.2189514 11.5620972,15.2189514 11.1715729,14.8284271 C10.7810486,14.4379028 10.7810486,13.8047379 11.1715729,13.4142136 L12.5857864,12 Z" fill="#000000"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    {{ __('check-email.back_login') }}
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
                    <a href="#" class="text-primary font-weight-bolder font-size-h5">{{ __('check-email.terms') }}</a>
                    <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">{{ __('check-email.plans') }}</a>
                    <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">{{ __('check-email.contact_us') }}</a>
                </div>
                <!--end::Content footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->

    </div>

</x-guest-layout>
