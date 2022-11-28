<x-dashboard-administrator>

    <x-slot name="title">
        {{ __('post.title') }}
    </x-slot>

    <x-slot name="local_link">
        {{-- begin::Local Vendors Styles Keen --}}
        <link href="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=2.1.1" rel="stylesheet" type="text/css"/>
        {{-- end::Local Vendors Styles Keen --}}
    </x-slot>

    <x-slot name="local_script">
        <!--begin::Page Vendors(used by this page)-->
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=2.1.1"></script>
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/plugins/custom/datatables/datatables.bundle.js?v=2.1.1"></script>
        <!--end::Page Vendors-->

        <!--begin::Page Scripts(used by this page)-->
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/widgets.js?v=2.1.1"></script>
        <script src="{{ asset('js/pages/features/ktdatatable/base/html-ticket-tablee8da.js?v=2.0.3') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
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
                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Shopping/Ticket.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                         height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <path
                                d="M3,10.0500091 L3,8 C3,7.44771525 3.44771525,7 4,7 L9,7 L9,9 C9,9.55228475 9.44771525,10 10,10 C10.5522847,10 11,9.55228475 11,9 L11,7 L21,7 C21.5522847,7 22,7.44771525 22,8 L22,10.0500091 C20.8588798,10.2816442 20,11.290521 20,12.5 C20,13.709479 20.8588798,14.7183558 22,14.9499909 L22,17 C22,17.5522847 21.5522847,18 21,18 L11,18 L11,16 C11,15.4477153 10.5522847,15 10,15 C9.44771525,15 9,15.4477153 9,16 L9,18 L4,18 C3.44771525,18 3,17.5522847 3,17 L3,14.9499909 C4.14112016,14.7183558 5,13.709479 5,12.5 C5,11.290521 4.14112016,10.2816442 3,10.0500091 Z M10,11 C9.44771525,11 9,11.4477153 9,12 L9,13 C9,13.5522847 9.44771525,14 10,14 C10.5522847,14 11,13.5522847 11,13 L11,12 C11,11.4477153 10.5522847,11 10,11 Z"
                                fill="#000000" opacity="0.3"
                                transform="translate(12.500000, 12.500000) rotate(-45.000000) translate(-12.500000, -12.500000) "/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Aside Toggle-->

            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">{!! trans('post.title') !!}</h5>
                <!--end::Page Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted">{!! trans('commercial-home.subtitle-updates-statistics') !!}</a>
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
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Add New Posts') }}" data-placement="bottom">
                <a href="{{ route('post.create') }}" class="btn btn-light-primary font-weight-bolder px-5 mr-3 my-1">
                    <span class="svg-icon svg-icon-md">
                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Navigation/Plus.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    {{ __('New Post') }}
                </a>
            </div>
            <!--end::Dropdown-->

            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Tasks Actions') }}" data-placement="top">
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
                            <a href="{{ route('post.create') }}" class="navi-link px-5 py-5 font-weight-bold">
                                <span class="navi-text">{{ __('Add New Task') }}</span>
                            </a>
                        </li>

                        <div class="separator separator-dashed"></div>

                        <li class="navi-item">
                            <a href="{{ route('post.index') }}" class="navi-link px-5 py-5 font-weight-bold">
                                <span class="navi-text text-danger">{{ __('List Of Tasks') }}</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Navigation-->
                </div>
            </div>
            <!--end::Dropdown-->

            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Switch to Other List') }}" data-placement="bottom">
                <a href="#showDetailedList" class="btn btn-icon btn-light my-1" onclick="showAndHideBlock(this)">
					<span class="svg-icon svg-icon-md d-none">
                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Layout/Layout-right-panel-2.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M10.5,5 L20.5,5 C21.3284271,5 22,5.67157288 22,6.5 L22,9.5 C22,10.3284271 21.3284271,11 20.5,11 L10.5,11 C9.67157288,11 9,10.3284271 9,9.5 L9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,13 L20.5,13 C21.3284271,13 22,13.6715729 22,14.5 L22,17.5 C22,18.3284271 21.3284271,19 20.5,19 L10.5,19 C9.67157288,19 9,18.3284271 9,17.5 L9,14.5 C9,13.6715729 9.67157288,13 10.5,13 Z" fill="#000000"/>
                                <rect fill="#000000" opacity="0.3" x="2" y="5" width="5" height="14" rx="1"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>

                    <span class="svg-icon svg-icon-md d-block">
                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Text/Bullet-list.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"/>
                                <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                </a>
            </div>
            <!--end::Dropdown-->
        </div>
        <!--end::Toolbar-->
    </x-slot>

    @if($message = Session::get('error'))
        <x-alert-error class="mb-4" :message="$message"/>
    @endif

    @if($message = Session::get('info'))
        <x-alert-info class="mb-4" :message="$message"/>
    @endif

    <div class="d-block display-once">

        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">{{ __('List Of Organization Posts') }} <span class="text-muted ml-3 font-weight-bold font-size-lg">{{ trans('This organization currently has :number tickets', ['number' => count($listOfPosts)]) }}</span></span>
                </div>

                <div class="card-toolbar">
                    <ul class="nav nav-bold nav-pills nav-pills-sm nav-dark">
                        <li class="nav-item" data-toggle="tooltip" title="{{ __('List Of All Posts') }}" data-placement="left">
                            <a class="nav-link active font-weight-bold font-size-md" data-toggle="tab" href="#kt_tab_table_4_7">{{ __('All Posts') }}</a>
                        </li>

                        <li class="nav-item border-right border-right-light-dark mr-2" data-toggle="tooltip" title="{{ __('List Of Disabled Agencies') }}" data-placement="right">
                            <a class="nav-link font-weight-bolder font-size-md" data-toggle="tab" href="#kt_tab_table_4_6">
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

                        <li class="nav-item dropdown ml-2">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ __('By Status') }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-toggle="tab" href="#kt_tab_table_4_5">{{ __('NEW') }}</a>
                                <a class="dropdown-item" data-toggle="tab" href="#kt_tab_table_4_4">{{ __('QUEUED') }}</a>
                                <a class="dropdown-item" data-toggle="tab" href="#kt_tab_table_4_3">{{ __('IN PROGRESS') }}</a>
                                <a class="dropdown-item" data-toggle="tab" href="#kt_tab_table_4_2">{{ __('PENDING') }}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="tab" href="#kt_tab_table_4_1">{{ __('RESOLVED') }}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="tab" href="#kt_tab_table_4_0">{{ __('CLOSED') }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="myTabTable4">
            @php
                $class = ['symbol-primary', 'symbol-info', 'symbol-danger', 'symbol-warning', 'symbol-linkedin'];
                $class_light = ['symbol-light-primary', 'symbol-light-info', 'symbol-light-danger', 'symbol-light-warning', 'symbol-light-linkedin'];
            @endphp

            {{--            ALL TICKETS--}}
            <div class="tab-pane fade show active" id="kt_tab_table_4_7" role="tabpanel" aria-labelledby="kt_tab_table_4_7">
            @forelse($listOfPosts as $post)
                <!--begin::Card-->
                    <div class="card card-custom @if(!$loop->last) gutter-b @endif">
                        <div class="card-body">
                            <!--begin::Top-->
                            <div class="d-flex">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-7">
                                    <div class="symbol symbol-50 symbol-lg-120 {!! $class_light[random_int(1, 4)] !!}">
                                        {{--<span class="font-size-h3 symbol-label font-weight-boldest">{{ strtoupper(substr($post->agency->customer->name, 0, 4)) }}...</span>--}}
                                        <span class="font-size-h3 symbol-label font-weight-boldest">PImage</span>
                                    </div>
                                </div>
                                <!--end::Pic-->

                                <!--begin: Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                        <!--begin::User-->
                                        <div class="mr-3">
                                            <!--begin::Name-->
                                            <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="d-flex align-items-center text-dark text-hover-primary font-size-h3 font-weight-bolder mr-3">
                                                {{--{{ strtoupper($post->machine->model) }} <span class="text-muted text-hover-primary font-size-lg pl-3"> {{ strtoupper($post->machine->serialNumber) }}</span>--}}
                                                {{ strtoupper($post->title) }} <span class="text-muted text-hover-primary font-size-lg pl-3"> {{ strtolower($post->slug) }}</span>
                                            </a>
                                            <!--end::Name-->
                                            <!--begin::Contacts-->
                                            <div class="d-flex flex-wrap mymachine->model-2">
                                                <a href="#" class="text-dark text-hover-primary font-weight-bolder mr-lg-8 mr-5 mb-lg-0 mb-2" data-toggle="tooltip" title="{!! trans('User who created this post is :name', ['name' => strtoupper($post->user->name)]) !!}" data-placement="top">
                                                    <span class="svg-icon svg-icon-md svg-icon-gray-800 mr-1">
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
                                                    @if(Auth::user()->id == $post->user->id)
                                                        Me
                                                    @else
                                                        {{ $post->user->name }}
                                                    @endif
                                                </a>
                                                <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                         version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path
                                                                d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                fill="#000000"/>
                                                            <circle fill="#000000" opacity="0.3" cx="19.5"
                                                                    cy="17.5" r="2.5"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                    PText
                                                </a>
                                                <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                                <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Map/Marker2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                         version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path
                                                                d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                                fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                    PText
                                                </a>
                                            </div>
                                            <!--end::Contacts-->
                                        </div>
                                        <!--begin::User-->
                                        <!--begin::Actions-->
                                        <div class="my-lg-0 my-1">
                                            <a href="#" class="btn btn-link-dark btn-text-dark font-weight-bolder mr-5 " data-toggle="tooltip" title="{!! trans('Date: :date', ['date' => 'PText']) !!}" data-placement="top">
                                                <span class="opacity-60 font-weight-bolder ml-2">
                                                    PText
                                                </span>
                                            </a>
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : NEW') }}" data-placement="top">
                                                <a href="#" class="btn btn-sm btn-light-linkedin font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="opacity-80 font-weight-bold mr-2">
                                                            {{ __('Status') }} :
                                                        </span>
                                                    <span class="font-weight-bolder">
                                                            {{ __('NEW') }}
                                                        </span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover py-3">
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->id, 'newStatus' => 'QUEUED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text">{{ __('QUEUED') }}</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->id, 'newStatus' => 'INPROG']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text">{{ __('IN PROGRESS') }}</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->id, 'newStatus' => 'PENDING']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text">{{ __('PENDING') }}</span>
                                                            </a>
                                                        </li>

                                                        <div class="separator separator-dashed"></div>

                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->id, 'newStatus' => 'RESOLVED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-primary">{{ __('RESOLVED') }}</span>
                                                            </a>
                                                        </li>

                                                        <div class="separator separator-dashed"></div>

                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->id, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>

                                            {{--@if (strtoupper($post->status) == "INIT")
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : NEW') }}" data-placement="top">
                                                    <a href="#" class="btn btn-sm btn-light-linkedin font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="opacity-80 font-weight-bold mr-2">
                                                            {{ __('Status') }} :
                                                        </span>
                                                        <span class="font-weight-bolder">
                                                            {{ __('NEW') }}
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-3">
                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'QUEUED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text">{{ __('QUEUED') }}</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'INPROG']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text">{{ __('IN PROGRESS') }}</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'PENDING']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text">{{ __('PENDING') }}</span>
                                                                </a>
                                                            </li>

                                                            <div class="separator separator-dashed"></div>

                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'RESOLVED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text text-primary">{{ __('RESOLVED') }}</span>
                                                                </a>
                                                            </li>

                                                            <div class="separator separator-dashed"></div>

                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            @elseif(strtoupper($post->status) == "QUEUED")
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : QUEUED') }}" data-placement="top">
                                                    <a href="#" class="btn btn-sm btn-light-info font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="opacity-80 font-weight-bold mr-2">
                                                            {{ __('Status') }} :
                                                        </span>
                                                        <span class="font-weight-bolder">
                                                            {{ __('QUEUED') }}
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-3">
                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'INPROG']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text">{{ __('IN PROGRESS') }}</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'PENDING']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text">{{ __('PENDING') }}</span>
                                                                </a>
                                                            </li>

                                                            <div class="separator separator-dashed"></div>

                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'RESOLVED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text text-primary">{{ __('RESOLVED') }}</span>
                                                                </a>
                                                            </li>

                                                            <div class="separator separator-dashed"></div>

                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            @elseif(strtoupper($post->status) == "INPROG")
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : IN PROGRESS') }}" data-placement="top">
                                                    <a href="#" class="btn btn-sm btn-light-instagram font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="opacity-80 font-weight-bold mr-2">
                                                            {{ __('Status') }} :
                                                        </span>
                                                        <span class="font-weight-bolder">
                                                            {{ __('IN PROGRESS') }}
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-3">
                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'PENDING']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text">{{ __('PENDING') }}</span>
                                                                </a>
                                                            </li>

                                                            <div class="separator separator-dashed"></div>

                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'RESOLVED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text text-primary">{{ __('RESOLVED') }}</span>
                                                                </a>
                                                            </li>

                                                            <div class="separator separator-dashed"></div>

                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            @elseif(strtoupper($post->status) == "PENDING")
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : PENDING') }}" data-placement="top">
                                                    <a href="#" class="btn btn-sm btn-light-warning font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="opacity-80 font-weight-bold mr-2">
                                                            {{ __('Status') }} :
                                                        </span>
                                                        <span class="font-weight-bolder">
                                                            {{ __('PENDING') }}
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-3">
                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'RESOLVED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text text-primary">{{ __('RESOLVED') }}</span>
                                                                </a>
                                                            </li>

                                                            <div class="separator separator-dashed"></div>

                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            @elseif(strtoupper($post->status) == "RESOLVED")
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : RESOLVED') }}" data-placement="top">
                                                    <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="opacity-80 font-weight-bold mr-2">
                                                            {{ __('Status') }} :
                                                        </span>
                                                        <span class="font-weight-bolder">
                                                            {{ __('RESOLVED') }}
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-3">
                                                            <li class="navi-item">
                                                                <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                    <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            @elseif(strtoupper($post->status) == "CLOSED")
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : CLOSED') }}" data-placement="top">
                                                    <a href="#" class="btn btn-sm btn-light-danger font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="opacity-80 font-weight-bold mr-2">
                                                            {{ __('Status') }} :
                                                        </span>
                                                        <span class="font-weight-bolder">
                                                            {{ __('CLOSED') }}
                                                        </span>
                                                    </a>
                                                </div>
                                            @endif--}}
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <!--begin::Description-->
                                        <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5 max-w-750px">
                                            @foreach($post->tags as $tag)
                                                <span>
                                                    @if (!$loop->first)-@endif {{ ucfirst($tag->name) }}
                                                </span>
                                            @endforeach
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Top-->

                            <!--begin::Separator-->
                            <div class="separator separator-solid my-7"></div>
                            <!--end::Separator-->

                            <!--begin::Bottom-->
                            <div class="d-flex align-items-center flex-wrap row">
                                <div class="col-md-6 row">
                                    <!--begin: Item-->
                                    {{--<div class="d-flex align-items-center flex-lg-fill my-1 col-md-6">
                                        @if(count($post->tags))
                                            <span class="mr-4">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Text/Bullet-list.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"/>
                                                            <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <div class="d-flex flex-column text-dark-75">
                                                <span class="font-weight-bolder font-size-sm">
                                                    {{ __('Tasks') }}
                                                </span>
                                                <span class="font-weight-bolder font-size-h5">
                                                    {{ count($post->tags) }}
                                                    <span class="text-dark-50 font-weight-bold font-size-lg">{{ __('Tasks') }}</span>
                                                </span>
                                            </div>
                                        @endif
                                    </div>--}}
                                    <!--end: Item-->

                                    <!--begin: Item-->
                                    {{--<div class="d-flex align-items-center flex-lg-fill my-1 col-md-6">
                                        @if(count($post->likes))
                                            <span class="mr-4">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Shopping/Sale2.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <polygon fill="#000000" opacity="0.3"
                                                                     points="12 20.0218549 8.47346039 21.7286168 6.86905972 18.1543453 3.07048824 17.1949849 4.13894342 13.4256452 1.84573388 10.2490577 5.08710286 8.04836581 5.3722735 4.14091196 9.2698837 4.53859595 12 1.72861679 14.7301163 4.53859595 18.6277265 4.14091196 18.9128971 8.04836581 22.1542661 10.2490577 19.8610566 13.4256452 20.9295118 17.1949849 17.1309403 18.1543453 15.5265396 21.7286168"/>
                                                            <polygon fill="#000000"
                                                                     points="14.0890818 8.60255815 8.36079737 14.7014391 9.70868621 16.049328 15.4369707 9.950447"/>
                                                            <path
                                                                d="M10.8543431,9.1753866 C10.8543431,10.1252593 10.085524,10.8938719 9.13585777,10.8938719 C8.18793881,10.8938719 7.41737243,10.1252593 7.41737243,9.1753866 C7.41737243,8.22551387 8.18793881,7.45690126 9.13585777,7.45690126 C10.085524,7.45690126 10.8543431,8.22551387 10.8543431,9.1753866"
                                                                fill="#000000" opacity="0.3"/>
                                                            <path
                                                                d="M14.8641422,16.6221564 C13.9162233,16.6221564 13.1456569,15.8535438 13.1456569,14.9036711 C13.1456569,13.9520555 13.9162233,13.1851857 14.8641422,13.1851857 C15.8138085,13.1851857 16.5826276,13.9520555 16.5826276,14.9036711 C16.5826276,15.8535438 15.8138085,16.6221564 14.8641422,16.6221564 Z"
                                                                fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>

                                            <div class="d-flex flex-column text-dark-75">
                                                <span class="font-weight-bolder font-size-sm">
                                                    {{ __('Machine parts used') }}
                                                </span>
                                                <span class="font-weight-bolder font-size-h5">
                                                    {{ count($post->likes) }}
                                                    <span class="text-dark-50 font-weight-bold font-size-lg">{{ __('Parts') }}</span>
                                                </span>
                                            </div>
                                        @endif
                                    </div>--}}
                                    <!--end: Item-->
                                </div>
                                <div class="col-md-2"></div>

                                {{--<div class="col-md-4">
                                @if(count($post->technicians))
                                    <!--begin: Item-->
                                        <div class="d-flex align-items-center flex-lg-fill my-1 float-right">
                                    <span class="mr-4">
                                        <span class="svg-icon svg-icon-2x">
                                            <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Group.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                 height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path
                                                        d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path
                                                        d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                            <div class="symbol-group symbol-hover">
                                                @foreach($post->technicians as $technician)
                                                    <div class="symbol symbol-45 symbol-circle {!! $class[random_int(1, 4)] !!}" data-toggle="tooltip" title="{{ strtoupper($technician->technician->name) }} : {{ $technician->technician->email }}">
                                                        <span class="font-size-sm symbol-label font-weight-boldest">{{ strtoupper(substr($technician->technician->name, 0, 2)) }}</span>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!--end: Item-->
                                    @endif
                                </div>--}}
                            </div>

                            <div class="d-flex align-items-center flex-wrap">
                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    @if(count($post->tags))
                                        <span class="mr-4">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/keen-v2/theme/demo6/dist/assets/media/svg/icons/Shopping/Dollar.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"></rect>
                                                        <rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"></rect>
                                                        <path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-sm">{{ __('Tags') }}</span>
                                            <span class="font-weight-bolder font-size-h5">
                                                        {{ count($post->tags) }}
                                                <span class="text-dark-50 font-weight-bold font-size-lg">{{ __('Tags') }}</span>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                <!--end: Item-->

                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    @if(count($post->likes))
                                        <span class="mr-4">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/keen-v2/theme/demo6/dist/assets/media/svg/icons/Shopping/Sale2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <polygon fill="#000000" opacity="0.3" points="12 20.0218549 8.47346039 21.7286168 6.86905972 18.1543453 3.07048824 17.1949849 4.13894342 13.4256452 1.84573388 10.2490577 5.08710286 8.04836581 5.3722735 4.14091196 9.2698837 4.53859595 12 1.72861679 14.7301163 4.53859595 18.6277265 4.14091196 18.9128971 8.04836581 22.1542661 10.2490577 19.8610566 13.4256452 20.9295118 17.1949849 17.1309403 18.1543453 15.5265396 21.7286168"></polygon>
                                                        <polygon fill="#000000" points="14.0890818 8.60255815 8.36079737 14.7014391 9.70868621 16.049328 15.4369707 9.950447"></polygon>
                                                        <path d="M10.8543431,9.1753866 C10.8543431,10.1252593 10.085524,10.8938719 9.13585777,10.8938719 C8.18793881,10.8938719 7.41737243,10.1252593 7.41737243,9.1753866 C7.41737243,8.22551387 8.18793881,7.45690126 9.13585777,7.45690126 C10.085524,7.45690126 10.8543431,8.22551387 10.8543431,9.1753866" fill="#000000" opacity="0.3"></path>
                                                        <path d="M14.8641422,16.6221564 C13.9162233,16.6221564 13.1456569,15.8535438 13.1456569,14.9036711 C13.1456569,13.9520555 13.9162233,13.1851857 14.8641422,13.1851857 C15.8138085,13.1851857 16.5826276,13.9520555 16.5826276,14.9036711 C16.5826276,15.8535438 15.8138085,16.6221564 14.8641422,16.6221564 Z" fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-sm">{{ __('Likes') }}</span>
                                            <span class="font-weight-bolder font-size-h5">
                                                        {{ count($post->likes) }}
                                                <span class="text-dark-50 font-weight-bold font-size-lg">{{ __('Likes') }}</span>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                <!--end: Item-->

                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    @if(count($post->rate))
                                        <span class="mr-4">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/keen-v2/theme/demo6/dist/assets/media/svg/icons/Shopping/Chart-bar1.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"></rect>
                                                        <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"></rect>
                                                        <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"></path>
                                                        <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"></rect>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-sm">{{ __('Rate') }}</span>
                                            <span class="font-weight-bolder font-size-h5">
                                                        {{ count($post->rate) }}
                                                <span class="text-dark-50 font-weight-bold font-size-lg">{{ __('Rate') }}</span>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                <!--end: Item-->

                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    @if(count($post->comments))
                                        <span class="mr-4">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/keen-v2/theme/demo6/dist/assets/media/svg/icons/Tools/Hummer.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M18.4246212,12.6464466 L21.2530483,9.81801948 C21.4483105,9.62275734 21.764893,9.62275734 21.9601551,9.81801948 L22.6672619,10.5251263 C22.862524,10.7203884 22.862524,11.0369709 22.6672619,11.232233 L19.8388348,14.0606602 C19.6435726,14.2559223 19.3269901,14.2559223 19.131728,14.0606602 L18.4246212,13.3535534 C18.2293591,13.1582912 18.2293591,12.8417088 18.4246212,12.6464466 Z M3.22182541,17.9497475 L13.1213203,8.05025253 C13.5118446,7.65972824 14.1450096,7.65972824 14.5355339,8.05025253 L15.9497475,9.46446609 C16.3402718,9.85499039 16.3402718,10.4881554 15.9497475,10.8786797 L6.05025253,20.7781746 C5.65972824,21.1686989 5.02656326,21.1686989 4.63603897,20.7781746 L3.22182541,19.363961 C2.83130112,18.9734367 2.83130112,18.3402718 3.22182541,17.9497475 Z" fill="#000000" opacity="0.3"></path>
                                                        <path d="M12.3890873,1.28248558 L12.3890873,1.28248558 C15.150511,1.28248558 17.3890873,3.52106183 17.3890873,6.28248558 L17.3890873,10.7824856 C17.3890873,11.058628 17.1652297,11.2824856 16.8890873,11.2824856 L12.8890873,11.2824856 C12.6129449,11.2824856 12.3890873,11.058628 12.3890873,10.7824856 L12.3890873,1.28248558 Z" fill="#000000" transform="translate(14.889087, 6.282486) rotate(-45.000000) translate(-14.889087, -6.282486)"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <div class="d-flex flex-column flex-lg-fill">
                                            <span class="text-dark-75 font-weight-bolder font-size-sm">{{ __('Comments') }}</span>
                                            <span class="font-weight-bolder font-size-h5">
                                                        {{ count($post->comments) }}
                                                <span class="text-dark-50 font-weight-bold font-size-lg">{{ __('Comments') }}</span>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                <!--end: Item-->

                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                    <span class="mr-4">
                                        <span class="svg-icon svg-icon-2x">
                                            <!--begin::Svg Icon | path:/keen-v2/theme/demo6/dist/assets/media/svg/icons/Communication/Chat2.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"></polygon>
                                                    <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z" fill="#000000"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <div class="d-flex flex-column">
                                        <span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
                                        <a href="#" class="text-primary font-weight-bolder">View</a>
                                    </div>
                                </div>
                                <!--end: Item-->

                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill my-1">
                                    <span class="mr-4">
                                        <span class="svg-icon svg-icon-2x">
                                            <!--begin::Svg Icon | path:/keen-v2/theme/demo6/dist/assets/media/svg/icons/Communication/Group.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <div class="symbol-group symbol-hover">
                                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Mark Stone">
                                            <img alt="Pic" src="https://preview.keenthemes.com/keen-v2/theme/demo6/dist/assets/media/users/150-3.jpg">
                                        </div>
                                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Charlie Stone">
                                            <img alt="Pic" src="https://preview.keenthemes.com/keen-v2/theme/demo6/dist/assets/media/users/150-11.jpg">
                                        </div>
                                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Luca Doncic">
                                            <img alt="Pic" src="https://preview.keenthemes.com/keen-v2/theme/demo6/dist/assets/media/users/150-4.jpg">
                                        </div>
                                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Nick Mana">
                                            <img alt="Pic" src="https://preview.keenthemes.com/keen-v2/theme/demo6/dist/assets/media/users/150-5.jpg">
                                        </div>
                                        <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Teresa Fox">
                                            <img alt="Pic" src="https://preview.keenthemes.com/keen-v2/theme/demo6/dist/assets/media/users/150-9.jpg">
                                        </div>
                                        <div class="symbol symbol-30 symbol-circle symbol-light-primary" data-toggle="tooltip" title="" data-original-title="More users">
                                            <span class="symbol-label font-weight-bold">5+</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Item-->
                            </div>
                            <!--end::Bottom-->
                        </div>
                    </div>
                    <!--end::Card-->
                @empty
                    <div class="card card-custom">
                        <div class="card-body">
                            <h6 class="text-center text-muted pt-2">{{ __('user.list_empty') }}</h6>
                        </div>
                    </div>
                @endforelse
            </div>

            {{--            DISABLED TICKETS--}}
            <div class="tab-pane fade" id="kt_tab_table_4_6" role="tabpanel" aria-labelledby="kt_tab_table_4_6">
            @forelse($listOfDisabledTickets as $post)
                <!--begin::Card-->
                <div class="card card-custom @if(!$loop->last) gutter-b @endif">
                    <div class="card-body">
                        <!--begin::Top-->
                        <div class="d-flex">
                            <!--begin::Pic-->
                            <div class="flex-shrink-0 mr-7">
                                <div class="symbol symbol-50 symbol-lg-120 {!! $class_light[random_int(1, 4)] !!}">
                                    <span class="font-size-h3 symbol-label font-weight-boldest">{{ strtoupper(substr($post->agency->customer->name, 0, 4)) }}...</span>
                                </div>
                            </div>
                            <!--end::Pic-->

                            <!--begin: Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                    <!--begin::User-->
                                    <div class="mr-3">
                                        <!--begin::Name-->
                                        <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="d-flex align-items-center text-dark text-hover-primary font-size-h3 font-weight-bolder mr-3">
                                            {{ strtoupper($post->machine->model) }} <span class="text-muted text-hover-primary font-size-lg pl-3"> {{ strtoupper($post->machine->serialNumber) }}</span>
                                        </a>
                                        <!--end::Name-->
                                        <!--begin::Contacts-->
                                        <div class="d-flex flex-wrap my-2">
                                            <a href="#" class="text-dark text-hover-primary font-weight-bolder mr-lg-8 mr-5 mb-lg-0 mb-2" data-toggle="tooltip" title="{!! trans('Commercial who created this ticket is :name', ['name' => strtoupper($post->commercial->name)]) !!}" data-placement="top">
                                            <span class="svg-icon svg-icon-md svg-icon-gray-800 mr-1">
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
                                                {{ strtoupper($post->commercial->name) }}
                                            </a>
                                            <a href="{{ route('agency.edit', ['id' => $post->agency->id]) }}" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                     version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path
                                                            d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                            fill="#000000"/>
                                                        <circle fill="#000000" opacity="0.3" cx="19.5"
                                                                cy="17.5" r="2.5"/>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                                {{ strtoupper($post->agency->designation) }}
                                            </a>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">
                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Map/Marker2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                     version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path
                                                            d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z"
                                                            fill="#000000"/>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                                {{ strtoupper($post->agency->region->designation) }}
                                            </a>
                                        </div>
                                        <!--end::Contacts-->
                                    </div>
                                    <!--begin::User-->
                                    <!--begin::Actions-->
                                    <div class="my-lg-0 my-1">
                                        <a href="#" class="btn btn-link-dark btn-text-dark font-weight-bolder mr-5 " data-toggle="tooltip" title="{!! trans('Date: :date', ['date' => Carbon\Carbon::parse(intval(substr($post->planFor, 0, 10)))->format("d/m/Y H:i")]) !!}" data-placement="top">
                                        <span class="opacity-60 font-weight-bolder ml-2">
                                            {{ Carbon\Carbon::parse(intval(substr($post->planFor, 0, 10)))->diffForHumans() }}
                                        </span>
                                        </a>

                                        @if (strtoupper($post->status) == "INIT")
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : NEW') }}" data-placement="top">
                                                <a href="#" class="btn btn-sm btn-light-linkedin font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="opacity-80 font-weight-bold mr-2">
                                                        {{ __('Status') }} :
                                                    </span>
                                                    <span class="font-weight-bolder">
                                                        {{ __('NEW') }}
                                                    </span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover py-3">
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'QUEUED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text">{{ __('QUEUED') }}</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'INPROG']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text">{{ __('IN PROGRESS') }}</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'PENDING']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text">{{ __('PENDING') }}</span>
                                                            </a>
                                                        </li>

                                                        <div class="separator separator-dashed"></div>

                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'RESOLVED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-primary">{{ __('RESOLVED') }}</span>
                                                            </a>
                                                        </li>

                                                        <div class="separator separator-dashed"></div>

                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        @elseif(strtoupper($post->status) == "QUEUED")
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : QUEUED') }}" data-placement="top">
                                                <a href="#" class="btn btn-sm btn-light-info font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="opacity-80 font-weight-bold mr-2">
                                                        {{ __('Status') }} :
                                                    </span>
                                                    <span class="font-weight-bolder">
                                                        {{ __('QUEUED') }}
                                                    </span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover py-3">
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'INPROG']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text">{{ __('IN PROGRESS') }}</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'PENDING']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text">{{ __('PENDING') }}</span>
                                                            </a>
                                                        </li>

                                                        <div class="separator separator-dashed"></div>

                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'RESOLVED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-primary">{{ __('RESOLVED') }}</span>
                                                            </a>
                                                        </li>

                                                        <div class="separator separator-dashed"></div>

                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        @elseif(strtoupper($post->status) == "INPROG")
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : IN PROGRESS') }}" data-placement="top">
                                                <a href="#" class="btn btn-sm btn-light-instagram font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="opacity-80 font-weight-bold mr-2">
                                                        {{ __('Status') }} :
                                                    </span>
                                                    <span class="font-weight-bolder">
                                                        {{ __('IN PROGRESS') }}
                                                    </span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover py-3">
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'PENDING']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text">{{ __('PENDING') }}</span>
                                                            </a>
                                                        </li>

                                                        <div class="separator separator-dashed"></div>

                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'RESOLVED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-primary">{{ __('RESOLVED') }}</span>
                                                            </a>
                                                        </li>

                                                        <div class="separator separator-dashed"></div>

                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        @elseif(strtoupper($post->status) == "PENDING")
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : PENDING') }}" data-placement="top">
                                                <a href="#" class="btn btn-sm btn-light-warning font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="opacity-80 font-weight-bold mr-2">
                                                        {{ __('Status') }} :
                                                    </span>
                                                    <span class="font-weight-bolder">
                                                        {{ __('PENDING') }}
                                                    </span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover py-3">
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'RESOLVED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-primary">{{ __('RESOLVED') }}</span>
                                                            </a>
                                                        </li>

                                                        <div class="separator separator-dashed"></div>

                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        @elseif(strtoupper($post->status) == "RESOLVED")
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : RESOLVED') }}" data-placement="top">
                                                <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="opacity-80 font-weight-bold mr-2">
                                                        {{ __('Status') }} :
                                                    </span>
                                                    <span class="font-weight-bolder">
                                                        {{ __('RESOLVED') }}
                                                    </span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0 m-0">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover py-3">
                                                        <li class="navi-item">
                                                            <a href="{{ route('post.status.update', ['id' => $post->id, 'code' => $post->code, 'newStatus' => 'CLOSED']) }}" class="navi-link px-5 font-weight-bold">
                                                                <span class="navi-text text-danger">{{ __('CLOSED') }}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        @elseif(strtoupper($post->status) == "CLOSED")
                                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="{{ __('Status : CLOSED') }}" data-placement="top">
                                                <a href="#" class="btn btn-sm btn-light-danger font-weight-bolder px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="opacity-80 font-weight-bold mr-2">
                                                        {{ __('Status') }} :
                                                    </span>
                                                    <span class="font-weight-bolder">
                                                        {{ __('CLOSED') }}
                                                    </span>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <!--begin::Description-->
                                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5 max-w-750px">
                                        @foreach($post->tasks as $task)
                                            <span>
                                            @if (!$loop->first)-@endif {{ ucfirst($task->task->designation) }}
                                        </span>
                                        @endforeach
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Top-->

                        <!--begin::Separator-->
                        <div class="separator separator-solid my-7"></div>
                        <!--end::Separator-->

                        <!--begin::Bottom-->
                        <div class="d-flex align-items-center flex-wrap row">
                            <div class="col-md-6 row">
                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill my-1 col-md-6">
                                    @if(count($post->tasks))
                                        <span class="mr-4">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Text/Bullet-list.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"/>
                                                        <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"/>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-sm">
                                                {{ __('Tasks') }}
                                            </span>
                                            <span class="font-weight-bolder font-size-h5">
                                                {{ count($post->tasks) }}
                                                <span class="text-dark-50 font-weight-bold font-size-lg">{{ __('Tasks') }}</span>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                <!--end: Item-->

                                <!--begin: Item-->
                                <div class="d-flex align-items-center flex-lg-fill my-1 col-md-6">
                                    @if(count($post->pieces))
                                        <span class="mr-4">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Shopping/Sale2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <polygon fill="#000000" opacity="0.3"
                                                                 points="12 20.0218549 8.47346039 21.7286168 6.86905972 18.1543453 3.07048824 17.1949849 4.13894342 13.4256452 1.84573388 10.2490577 5.08710286 8.04836581 5.3722735 4.14091196 9.2698837 4.53859595 12 1.72861679 14.7301163 4.53859595 18.6277265 4.14091196 18.9128971 8.04836581 22.1542661 10.2490577 19.8610566 13.4256452 20.9295118 17.1949849 17.1309403 18.1543453 15.5265396 21.7286168"/>
                                                        <polygon fill="#000000"
                                                                 points="14.0890818 8.60255815 8.36079737 14.7014391 9.70868621 16.049328 15.4369707 9.950447"/>
                                                        <path
                                                            d="M10.8543431,9.1753866 C10.8543431,10.1252593 10.085524,10.8938719 9.13585777,10.8938719 C8.18793881,10.8938719 7.41737243,10.1252593 7.41737243,9.1753866 C7.41737243,8.22551387 8.18793881,7.45690126 9.13585777,7.45690126 C10.085524,7.45690126 10.8543431,8.22551387 10.8543431,9.1753866"
                                                            fill="#000000" opacity="0.3"/>
                                                        <path
                                                            d="M14.8641422,16.6221564 C13.9162233,16.6221564 13.1456569,15.8535438 13.1456569,14.9036711 C13.1456569,13.9520555 13.9162233,13.1851857 14.8641422,13.1851857 C15.8138085,13.1851857 16.5826276,13.9520555 16.5826276,14.9036711 C16.5826276,15.8535438 15.8138085,16.6221564 14.8641422,16.6221564 Z"
                                                            fill="#000000" opacity="0.3"/>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>

                                        <div class="d-flex flex-column text-dark-75">
                                            <span class="font-weight-bolder font-size-sm">
                                                {{ __('Machine parts used') }}
                                            </span>
                                            <span class="font-weight-bolder font-size-h5">
                                                {{ count($post->pieces) }}
                                                <span class="text-dark-50 font-weight-bold font-size-lg">{{ __('Parts') }}</span>
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                <!--end: Item-->
                            </div>
                            <div class="col-md-2"></div>

                            <div class="col-md-4">
                            @if(count($post->technicians))
                                <!--begin: Item-->
                                    <div class="d-flex align-items-center flex-lg-fill my-1 float-right">
                                <span class="mr-4">
                                    <span class="svg-icon svg-icon-2x">
                                        <!--begin::Svg Icon | path:/keen/theme/demo6/dist/assets/media/svg/icons/Communication/Group.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                             height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path
                                                    d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path
                                                    d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                        <div class="symbol-group symbol-hover">
                                            @foreach($post->technicians as $technician)
                                                <div class="symbol symbol-45 symbol-circle {!! $class[random_int(1, 4)] !!}" data-toggle="tooltip" title="{{ strtoupper($technician->technician->name) }} : {{ $technician->technician->email }}">
                                                    <span class="font-size-sm symbol-label font-weight-boldest">{{ strtoupper(substr($technician->technician->name, 0, 2)) }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!--end: Item-->
                                @endif
                            </div>
                        </div>
                        <!--end::Bottom-->
                    </div>
                </div>
                <!--end::Card-->
            @empty
                <div class="card card-custom">
                    <div class="card-body">
                        <h6 class="text-center text-muted pt-2">{{ __('user.list_empty') }}</h6>
                    </div>
                </div>
            @endforelse
            </div>

            {{--NEW TICKETS--}}

            {{--QUEUED TICKETS--}}

            {{--IN PROGRESS TICKETS--}}

            {{--PENDING TICKETS--}}

            {{--RESOLVED TICKETS--}}

            {{--CLOSED TICKETS--}}
        </div>
    </div>

    <div class="d-none display-once">

        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-label font-weight-bolder font-size-h4 text-dark-75">{{ __('List Of Organization Tickets') }} <span class="text-muted ml-3 font-weight-bold font-size-lg">{{ trans('This organization currently has :number tickets', ['number' => count($listOfPosts)]) }}</span></span>
                </div>

                <div class="card-toolbar">
                    <ul class="nav nav-bold nav-pills nav-pills-sm nav-dark">
                        <li class="nav-item" data-toggle="tooltip" title="{{ __('List Of All Tickets') }}" data-placement="left">
                            <a class="nav-link py-2 px-4 active font-weight-bolder font-size-md" data-toggle="tab" href="#kt_tab_table_4_3">{{ __('All Tickets') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <!--begin::Search Form-->
                <div>
                    <div class="row align-items-center">
                        <div class="col-lg-11 col-xl-11">
                            <div class="row align-items-center">
                                <div class="col-md-6 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="{{ __('Search...') }}" id="kt_datatable_search_query" />
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-3 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                        <select class="form-control" id="kt_datatable_search_status">
                                            <option value="">{{ __('All') }}</option>
                                            <option value="1">{{ __('NEW') }}</option>
                                            <option value="2">{{ __('QUEUED') }}</option>
                                            <option value="3">{{ __('IN PROGRESS') }}</option>
                                            <option value="4">{{ __('PENDING') }}</option>
                                            <option value="5">{{ __('RESOLVED') }}</option>
                                            <option value="6">{{ __('CLOSED') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 my-2 my-md-0">
                                    <div class="d-flex align-items-center">
                                        <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                        <select class="form-control" id="kt_datatable_search_type">
                                            <option value="">All</option>
                                            <option value="1">{{ __('Enabled') }}</option>
                                            <option value="2">{{ __('Disabled') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Search Form-->
            </div>
        </div>
        <!--end::Card-->

        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                    <thead>
                    <tr>
                        <th title="Field #1">#ID</th>
                        <th title="Field #2">{{ __('CODE TICKET') }}</th>
                        <th title="Field #3">{{ __('MODEL MACHINE') }}</th>
                        <th title="Field #4">{{ __('SERIAL NUMBER') }}</th>
                        <th title="Field #5">{{ __('AGENCY') }}</th>
                        <th title="Field #6">{{ __('REGION') }}</th>
                        <th title="Field #7">{{ __('PLAN FOR') }}</th>
                        <th title="Field #8">{{ __('TECHNICIANS') }}</th>
                        <th title="Field #9">{{ __('CREATED BY') }}</th>
                        <th title="Field #10">{{ __('STATUS') }}</th>
                        <th title="Field #11">{{ __('TYPE') }}</th>
                        <th title="Field #12">{{ __('ACTIONS') }}</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($listTotalOfTickets as $post)
                        <tr>
                            <td><span class="font-weight-bolder">#{{ $post->id }}</span></td>

                            <td>{{ strtoupper($post->code) }}</td>
                            <td>{{ ucfirst($post->machine->model) }}</td>
                            <td>{{ strtoupper($post->machine->serialNumber) }}</td>
                            <td>{{ strtoupper($post->commercial->name) }}</td>
                            <td>{{ strtoupper($post->agency->region->designation) }}</td>
                            <td>{!! trans(':number', ['number' => Carbon\Carbon::parse(intval(substr($post->planFor, 0, 10)))->format("d/m/Y")]) !!}</td>
                            <td>
                                <ul>
                                    @foreach($post->technicians as $technician)
                                        <li>{{ strtoupper($technician->technician->name) }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $post->commercial->name }}</td>

                            <td class="text-right">
                                @if(strtoupper($post->status) == 'INIT')
                                    1
                                @elseif(strtoupper($post->status) == 'QUEUED')
                                    2
                                @elseif(strtoupper($post->status) == 'INPROG')
                                    3
                                @elseif(strtoupper($post->status) == 'PENDING')
                                    4
                                @elseif(strtoupper($post->status) == 'RESOLVED')
                                    5
                                @elseif(strtoupper($post->status) == 'CLOSED')
                                    6
                                @endif
                            </td>

                            <td class="text-right">
                                @if($post->deletedAt)
                                    2
                                @else
                                    1
                                @endif
                            </td>

                            <td class="p-0">
                                <div class="text-right">
                                    <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-icon btn-light-primary m-1">
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

                                    @if(!$post->deletedAt)
                                        <a href="{{ route('post.disable.id', ['id' => $post->id, 'code' => $post->code]) }}" onclick="return confirm('{{ __('post.infos.ticket-are-you-sure-disable', ['code' => $post->code]) }}')" class="btn btn-icon btn-danger m-1">
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
                                    @else
                                        <button disabled class="btn btn-icon btn-light-danger m-1" title="{{ __('This Ticket is already Disabled.') }}">
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
                                        </button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>

</x-dashboard-administrator>
