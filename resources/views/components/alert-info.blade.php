@props(['message'])

<div class="alert alert-custom alert-light-primary fade show mb-7" role="alert">
    <div class="alert-icon">
            <span class="svg-icon svg-icon-primary svg-icon-4x">
                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Code/Warning-1-circle.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                     height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                        <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1"/>
                        <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1"/>
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
    </div>
    <div class="alert-text">

        <div class="font-medium text-red-600">
            {{ __('user.be_careful') }}
        </div>

        <h6 class="mt-3 list-disc list-inside text-sm text-red-600">
            {{ $message }}
        </h6>
    </div>

    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" class="svg-icon svg-icon-primary svg-icon-2x">
                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Navigation/Close.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                         height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                               fill="#000000">
                                <rect x="0" y="7" width="16" height="2" rx="1"/>
                                <rect opacity="0.3"
                                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) "
                                      x="0" y="7" width="16" height="2" rx="1"/>
                            </g>
                        </g>
                    </svg>
                <!--end::Svg Icon-->
                </span>
        </button>
    </div>
</div>
