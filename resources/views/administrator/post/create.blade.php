<x-dashboard-administrator>

    <x-slot name="title">
        @if(Route::currentRouteName() == 'ticket.create')
            {{ __('Add a New Ticket') }}
        @elseif(Route::currentRouteName() == 'ticket.edit')
            {{ __('Edit a Ticket') }}
        @endif
    </x-slot>

    <x-slot name="local_link"></x-slot>

    <x-slot name="local_script">
        <!--begin::Page Scripts(used by this page)-->
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/widgets.js?v=2.1.1"></script>
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/custom/profile/profile.js?v=2.1.1"></script>

        <script src="{{ asset('js/pages/features/forms/widgets/bootstrap-datetimepickere8da.js') }}"></script>
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/features/forms/widgets/bootstrap-multipleselectsplitter.js?v=2.1.1"></script>
        <script src="https://preview.keenthemes.com/keen/theme/demo6/dist/assets/js/pages/features/forms/widgets/select2.js?v=2.1.1"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
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
            <li class="menu-item menu-item-active" aria-haspopup="true">
                <a href="{{ route('tickets.index') }}" class="menu-link">
                    <span class="menu-text">{!! trans('commercial-home.nav-tickets') !!}</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
                <a href="{{ route('technicians.index') }}" class="menu-link">
                    <span class="menu-text">{!! trans('commercial-home.nav-technicians') !!}</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu menu-item-rel" aria-haspopup="true">
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
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                         height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path
                                d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                            <path
                                d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                fill="#000000"/>
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
                    @if(Route::currentRouteName() == 'ticket.create')
                        {{ __('Add New Ticket') }}
                    @elseif(Route::currentRouteName() == 'ticket.edit')
                        {{ __('Edit Ticket') }}
                    @endif
                </h5>
                <!--end::Page Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('tickets.index') }}" class="text-muted">{{ __('Tickets') }}</a>
                    </li>

                    <li class="breadcrumb-item text-muted">
                        @if(Route::currentRouteName() == 'ticket.create')
                            <a href="#" class="text-muted">{{ __('Adding a new Ticket') }}</a>
                        @elseif(Route::currentRouteName() == 'ticket.edit')
                            <a href="#" class="text-muted">{{ __('Updating a Ticket') }}</a>
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
        </div>
        <!--end::Toolbar-->
    </x-slot>

    <!--begin::Profile Account Information-->
    <div class="d-flex flex-row">
        <!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8">

            @if(!count($listOfTasks))
                <x-alert-error class="mb-4" :message="__('If the task list is not visible, it is empty. Please add one.')" />
            @endif

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            @if($message = Session::get('error'))
                <x-alert-error class="mb-4" :message="$message"/>
            @endif

            @if($message = Session::get('info'))
                <x-alert-info class="mb-4" :message="$message"/>
            @endif

            @if(Route::currentRouteName() == 'ticket.create')
                <!--begin::Form-->
                <form method="POST" action="{{ route('ticket.store') }}">
                    @csrf

                    <!--begin::Card - HEADER-->
                    <div class="card card-custom card-sticky gutter-b" id="kt_page_sticky_card">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">{{ __('Ticket Information') }}</h3>
                                <span
                                    class="text-muted font-weight-bold font-size-sm mt-1">{{ __('Add Settings for this Ticket') }}</span>
                            </div>

                            <div class="card-toolbar">
                                <button type="submit" class="btn btn-primary font-weight-bolder mr-2 pl-10 py-3">{{ __('Save Changes') }}
                                    <span class="svg-icon svg-icon-md ml-3">
                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/General/Save.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                             width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path
                                                    d="M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z"
                                                    fill="#000000" fill-rule="nonzero"/>
                                                <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="5"
                                                      rx="0.5"/>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </button>

                                <a href="{{ route("tickets.index") }}" class="btn btn-light-primary font-weight-bolder">{{ __('user.reset') }}</a>
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
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Ticket Code') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg   input-group-solid">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg form-control-solid"
                                                name="code"
                                                placeholder="{{ __('Please enter a valid code') }}"
                                                required
                                                title="Please enter a valid designation"
                                                value="{{ old('code') }}"
                                            />
                                        </div>
                                        <span class="form-text text-muted">{!! trans('This Code is <code class"font-size-sm">unique</code> and <code class"font-size-md">cannot be modified</code>.') !!}</span>
                                    </div>
                                </div>

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Plan For') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-solid date" id="kt_datetimepicker_2" data-target-input="nearest">
                                            <input
                                                type="text"
                                                name="planFor"
                                                required
                                                class="form-control form-control-solid form-control-lg datetimepicker-input"
                                                placeholder="{{ __('Ticket Planning') }}"
                                                data-target="#kt_datetimepicker_2"
                                                value="{{ old('planFor') }}"
                                            />
                                            <div class="input-group-append" data-target="#kt_datetimepicker_2" data-toggle="datetimepicker">
                                                <span class="input-group-text">
                                                    <i class="ki ki-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">{!! trans('Please choose the presumed intervention date for this ticket.') !!}</span>
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
                                        <h5 class="font-weight-bold mb-6">{{ __('Concerned Machine') }}</h5>
                                    </div>
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Machine') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <select class="form-control select2" id="kt_select2_2" name="machine" onchange="displayInfos(this)">
                                                <option value="0">{{ __('Default') }}</option>
                                                @foreach($listOfAgencies as $agency)
                                                    @if(count($agency->sorties))
                                                        <optgroup label="{{ strtoupper($agency->designation) }} - {{ strtoupper($agency->code) }}">
                                                            @foreach($agency->sorties as $machine)
                                                                <option value="{{ $machine->machine->id }}">{{ strtoupper($machine->machine->serialNumber) }} - {{ ucfirst($machine->machine->model) }}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="form-text text-muted">{!! trans('You must absolutely choose the machine that is concerned by this ticket. The list above shows only the <code class"font-size-md">Delivered Machines</code>.') !!}</span>
                                    </div>

                                    <div class="col-lg-3 col-xl-3">
                                        <a href="{{ route('agency.create') }}" class="btn btn-primary" onclick="return confirm('{{ __('Are you sure you want to continue ? If so, you will be redirected to another page.') }}')">Create New Agency</a>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-xl-3 col-lg-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th class="pl-5 w-100px font-weight-bold text-muted align-middle">{{ __('Machine Model') }}</th>
                                                    <td class="align-middle font-weight-bold text-gray-700" id="machineModel">
                                                        {{ __('No item selected') }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th class="pl-5 w-100px font-weight-bold text-muted align-middle">{{ __('Serial Number') }}</th>
                                                    <td class="align-middle font-weight-bold text-gray-700" id="serialNumber">
                                                        {{ __('No item selected') }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->

                    @if(count($listOfTasks))
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="form">
                                <div class="card-body">
                                    <!--begin::Heading-->
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mb-6">{{ __('Tasks') }}</h5>
                                        </div>
                                    </div>
                                    <!--begin::Heading-->

                                    <div class="row">
                                        <label class="col-xl-3 col-lg-3">{!! trans('List of Tasks') !!} <span class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    @foreach($listOfTasks as $task)
                                                        <tr>
                                                            <td class="pl-5 text-muted font-weight-bold align-middle">{{ ucfirst($task->designation) }}</td>
                                                            <td class="align-middle w-40px">
                                                                <span class="switch ml-1 mr-0">
                                                                    <label>
                                                                        <input type="checkbox" name="tasks[{{ $task->designation }}]"/>
                                                                        <span></span>
                                                                    </label>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <span class="form-text text-muted">{!! trans('You must select the tasks to be performed in this ticket. The Technician can add more if necessary.') !!}</span>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <a href="{{ route('task.create') }}" class="btn btn-primary btn-lg" onclick="return confirm('{{ __('Are you sure you want to continue ? If so, you will be redirected to another page.') }}')">Create New Task</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    @endif

                    @if(count($listOfTechnicians))
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="form">
                                <div class="card-body">
                                    <!--begin::Heading-->
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mb-6">{{ __('Technicians') }}</h5>
                                        </div>
                                    </div>
                                    <!--begin::Heading-->

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Choose Technicians') }} <span class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid pr-3 mb-5">
                                                <select
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="technicians[]"
                                                    required>
                                                    <option value="0" selected>None</option>

                                                    @foreach($listOfTechnicians as $technician)
                                                        <option value="{{ $technician->id }}">{{ ucfirst($technician->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="input-group input-group-lg input-group-solid pr-3 mb-5">
                                                <select
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="technicians[]"
                                                    required>
                                                    <option value="0" selected>None</option>

                                                    @foreach($listOfTechnicians as $technician)
                                                        <option value="{{ $technician->id }}">{{ ucfirst($technician->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="input-group input-group-lg input-group-solid pr-3">
                                                <select
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="technicians[]"
                                                    required>
                                                    <option value="0" selected>None</option>

                                                    @foreach($listOfTechnicians as $technician)
                                                        <option value="{{ $technician->id }}">{{ ucfirst($technician->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <span class="form-text text-muted mt-5">{!! trans('Please select the Technicians associated with this ticket. You can choose up to 3.') !!}</span>
                                        </div>

                                        <div class="col-lg-3 col-xl-3">
                                            <a href="{{ route('technician.create') }}" class="btn btn-primary btn-lg" onclick="return confirm('{{ __('Are you sure you want to continue ? If so, you will be redirected to another page.') }}')">Create New Technician</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    @endif
                </form>
                <!--end::Form-->
            @elseif(Route::currentRouteName() == 'ticket.edit')
                <!--begin::Form-->
                <form method="POST" action="{{ route('ticket.update', ['id' => $ticket->id]) }}">
                    @method('PUT')
                    @csrf

                    <!--begin::Card - HEADER-->
                    <div class="card card-custom card-sticky gutter-b" id="kt_page_sticky_card">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">{{ __('Ticket Information') }}</h3>
                                <span
                                    class="text-muted font-weight-bold font-size-sm mt-1">{{ __('Update This Ticket') }}</span>
                            </div>

                            <div class="card-toolbar">
                                <button type="submit" class="btn btn-primary font-weight-bolder mr-2 pl-10 py-3">{{ __('Save Changes') }}
                                    <span class="svg-icon svg-icon-md ml-3">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/General/Save.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path
                                                d="M17,4 L6,4 C4.79111111,4 4,4.7 4,6 L4,18 C4,19.3 4.79111111,20 6,20 L18,20 C19.2,20 20,19.3 20,18 L20,7.20710678 C20,7.07449854 19.9473216,6.94732158 19.8535534,6.85355339 L17,4 Z M17,11 L7,11 L7,4 L17,4 L17,11 Z"
                                                fill="#000000" fill-rule="nonzero"/>
                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="5"
                                                  rx="0.5"/>
                                        </g>
                                    </svg>
                                        <!--end::Svg Icon-->
                                </span>
                                </button>

                                <a href="{{ route("tickets.index") }}" class="btn btn-light-primary font-weight-bolder">{{ __('user.reset') }}</a>
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
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Ticket Code') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <input
                                                type="text"
                                                class="form-control form-control-lg form-control-solid"
                                                name="code"
                                                placeholder="{{ __('Please enter a valid code') }}"
                                                readonly
                                                title="Please enter a valid designation"
                                                value="{{ old('code', $ticket->code) }}"
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
                                </div>

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Plan For') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-solid date" id="kt_datetimepicker_2" data-target-input="nearest">
                                            <input
                                                type="text"
                                                name="planFor"
                                                required
                                                class="form-control form-control-solid form-control-lg datetimepicker-input"
                                                placeholder="{{ __('Ticket Planning') }}"
                                                data-target="#kt_datetimepicker_2"
                                                value="{{ old('planFor', Carbon\Carbon::parse(intval(substr($ticket->planFor, 0, 10)))->format("d/m/Y")) }}"
                                            />

                                            <div class="input-group-append" data-target="#kt_datetimepicker_2" data-toggle="datetimepicker">
                                                <span class="input-group-text">
                                                    <i class="ki ki-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">{!! trans('Please choose the presumed intervention date for this ticket.') !!}</span>
                                    </div>
                                </div>

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Status') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid pr-3 mb-5">
                                            <select
                                                class="form-control form-control-lg form-control-solid"
                                                name="status"
                                                required>
                                                @if(strtoupper($ticket->status) == 'INIT')
                                                    <option value="INIT" @if(strtoupper($ticket->status) == 'INIT') selected @endif>{{ __('NEW') }}</option>
                                                    <option value="QUEUED" @if(strtoupper($ticket->status) == 'QUEUED') selected @endif>{{ __('QUEUED') }}</option>
                                                    <option value="INPROG" @if(strtoupper($ticket->status) == 'INPROG') selected @endif>{{ __('IN PROGRESS') }}</option>
                                                    <option value="PENDING" @if(strtoupper($ticket->status) == 'PENDING') selected @endif>{{ __('PENDING') }}</option>
                                                    <option value="RESOLVED" @if(strtoupper($ticket->status) == 'RESOLVED') selected @endif>{{ __('RESOLVED') }}</option>
                                                    <option value="CLOSED" @if(strtoupper($ticket->status) == 'CLOSED') selected @endif>{{ __('CLOSED') }}</option>
                                                @elseif(strtoupper($ticket->status) == 'QUEUED')
                                                    <option value="QUEUED" @if(strtoupper($ticket->status) == 'QUEUED') selected @endif>{{ __('QUEUED') }}</option>
                                                    <option value="INPROG" @if(strtoupper($ticket->status) == 'INPROG') selected @endif>{{ __('IN PROGRESS') }}</option>
                                                    <option value="PENDING" @if(strtoupper($ticket->status) == 'PENDING') selected @endif>{{ __('PENDING') }}</option>
                                                    <option value="RESOLVED" @if(strtoupper($ticket->status) == 'RESOLVED') selected @endif>{{ __('RESOLVED') }}</option>
                                                    <option value="CLOSED" @if(strtoupper($ticket->status) == 'CLOSED') selected @endif>{{ __('CLOSED') }}</option>
                                                @elseif(strtoupper($ticket->status) == 'INPROG')
                                                    <option value="INPROG" @if(strtoupper($ticket->status) == 'INPROG') selected @endif>{{ __('IN PROGRESS') }}</option>
                                                    <option value="PENDING" @if(strtoupper($ticket->status) == 'PENDING') selected @endif>{{ __('PENDING') }}</option>
                                                    <option value="RESOLVED" @if(strtoupper($ticket->status) == 'RESOLVED') selected @endif>{{ __('RESOLVED') }}</option>
                                                    <option value="CLOSED" @if(strtoupper($ticket->status) == 'CLOSED') selected @endif>{{ __('CLOSED') }}</option>
                                                @elseif(strtoupper($ticket->status) == 'PENDING')
                                                    <option value="PENDING" @if(strtoupper($ticket->status) == 'PENDING') selected @endif>{{ __('PENDING') }}</option>
                                                    <option value="RESOLVED" @if(strtoupper($ticket->status) == 'RESOLVED') selected @endif>{{ __('RESOLVED') }}</option>
                                                    <option value="CLOSED" @if(strtoupper($ticket->status) == 'CLOSED') selected @endif>{{ __('CLOSED') }}</option>
                                                @elseif(strtoupper($ticket->status) == 'RESOLVED')
                                                    <option value="RESOLVED" @if(strtoupper($ticket->status) == 'RESOLVED') selected @endif>{{ __('RESOLVED') }}</option>
                                                    <option value="CLOSED" @if(strtoupper($ticket->status) == 'CLOSED') selected @endif>{{ __('CLOSED') }}</option>
                                                @elseif(strtoupper($ticket->status) == 'CLOSED')
                                                    <option value="CLOSED" @if(strtoupper($ticket->status) == 'CLOSED') selected @endif>{{ __('CLOSED') }}</option>
                                                @endif
                                            </select>
                                        </div>
                                        <span class="form-text text-muted">{!! trans('You can update the progress of this ticket by changing its status. A new ticket always has the status <code class"font-size-sm">New</code>.') !!}</span>
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
                                        <h5 class="font-weight-bold mb-6">{{ __('Concerned Machine') }}</h5>
                                    </div>
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Form Group-->
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Machine') }} <span class="text-danger">*</span></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group">
                                            <select class="form-control select2" id="kt_select2_2" name="machine" onchange="displayInfos(this)">
                                                <option value="0">{{ __('Default') }}</option>
                                                @foreach($listOfAgencies as $agency)
                                                    @if(count($agency->sorties))
                                                        <optgroup label="{{ strtoupper($agency->designation) }} - {{ strtoupper($agency->code) }}">
                                                            @foreach($agency->sorties as $machine)
                                                                <option value="{{ $machine->machine->id }}" @if($machine->machine->id == $ticket->machine->id) selected @endif>{{ strtoupper($machine->machine->serialNumber) }} - {{ ucfirst($machine->machine->model) }}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="form-text text-muted">{!! trans('You must absolutely choose the machine that is concerned by this ticket. The list above shows only the <code class"font-size-md">Delivered Machines</code>.') !!}</span>
                                    </div>

                                    <div class="col-lg-3 col-xl-3">
                                        <a href="{{ route('agency.create') }}" class="btn btn-primary" onclick="return confirm('{{ __('Are you sure you want to continue ? If so, you will be redirected to another page.') }}')">Create New Agency</a>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-xl-3 col-lg-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th class="pl-5 w-100px font-weight-bold text-muted align-middle">{{ __('Machine Model') }}</th>
                                                    <td class="align-middle font-weight-bold text-gray-700" id="machineModel">
                                                        {{ __('No item selected') }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th class="pl-5 w-100px font-weight-bold text-muted align-middle">{{ __('Serial Number') }}</th>
                                                    <td class="align-middle font-weight-bold text-gray-700" id="serialNumber">
                                                        {{ __('No item selected') }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->

                    @if(count($listOfTasks))
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="form">
                                <div class="card-body">
                                    <!--begin::Heading-->
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mb-6">{{ __('Tasks') }}</h5>
                                        </div>
                                    </div>
                                    <!--begin::Heading-->

                                    <div class="row">
                                        <label class="col-xl-3 col-lg-3">{!! trans('List of Tasks') !!} <span class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <table class="table table-bordered">
                                                <tbody>
                                                @foreach($listOfTasks as $task)
                                                    <tr>
                                                        <td class="pl-5 text-muted font-weight-bold align-middle">{{ ucfirst($task->designation) }}</td>
                                                        <td class="align-middle w-40px">
                                                            <span class="switch ml-1 mr-0">
                                                                <label>
                                                                    <input type="checkbox" name="tasks[{{ $task->id }}]" @if(in_array($task->id, $listOfCurrentTasks)) checked @endif/>
                                                                    <span></span>
                                                                </label>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <span class="form-text text-muted">{!! trans('You must select the tasks to be performed in this ticket. The Technician can add more if necessary.') !!}</span>
                                        </div>
                                        <div class="col-lg-3 col-xl-3">
                                            <a href="{{ route('task.create') }}" class="btn btn-primary btn-lg" onclick="return confirm('{{ __('Are you sure you want to continue ? If so, you will be redirected to another page.') }}')">Create New Task</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    @endif

                    @if(count($listOfTechnicians))
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="form">
                                <div class="card-body">
                                    <!--begin::Heading-->
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mb-6">{{ __('Technicians') }}</h5>
                                        </div>
                                    </div>
                                    <!--begin::Heading-->

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Choose Technicians') }} <span class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="input-group input-group-lg input-group-solid pr-3 mb-5">
                                                <select
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="technicians[]"
                                                    required>
                                                    <option value="0" selected>None</option>

                                                    @foreach($listOfTechnicians as $technician)
                                                        <option value="{{ $technician->id }}" @if(isset($ticket->technicians[0])) @if($ticket->technicians[0]->technician->id == $technician->id) selected @endif @endif>{{ ucfirst($technician->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="input-group input-group-lg input-group-solid pr-3 mb-5">
                                                <select
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="technicians[]"
                                                    required>
                                                    <option value="0" selected>None</option>

                                                    @foreach($listOfTechnicians as $technician)
                                                        <option value="{{ $technician->id }}" @if(isset($ticket->technicians[1])) @if($ticket->technicians[1]->technician->id == $technician->id) selected @endif @endif>{{ ucfirst($technician->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="input-group input-group-lg input-group-solid pr-3">
                                                <select
                                                    class="form-control form-control-lg form-control-solid"
                                                    name="technicians[]"
                                                    required>
                                                    <option value="0" selected>None</option>

                                                    @foreach($listOfTechnicians as $technician)
                                                        <option value="{{ $technician->id }}" @if(isset($ticket->technicians[2])) @if($ticket->technicians[2]->technician->id == $technician->id) selected @endif @endif>{{ ucfirst($technician->name) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <span class="form-text text-muted mt-5">{!! trans('Please select the Technicians associated with this ticket. You can choose up to 3.') !!}</span>
                                        </div>

                                        <div class="col-lg-3 col-xl-3">
                                            <a href="{{ route('technician.create') }}" class="btn btn-primary btn-lg" onclick="return confirm('{{ __('Are you sure you want to continue ? If so, you will be redirected to another page.') }}')">Create New Technician</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    @endif

                    @if(count($ticket->pieces))
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="form">
                                <div class="card-body">
                                    <!--begin::Heading-->
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h5 class="font-weight-bold mb-6">{{ __('Machine Parts') }}</h5>
                                        </div>
                                    </div>
                                    <!--begin::Heading-->

                                    <div class="row">
                                        <label class="col-xl-3 col-lg-3">{!! trans('List of Parts') !!} <span class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="table-active">
                                                        <th scope="col" class="pl-5 align-middle">{!! trans('Designation') !!}</th>
                                                        <th scope="col" class="pl-5 align-middle">{!! trans('Reference') !!}</th>
                                                        <th scope="col" class="pl-5 align-middle min-w-40px"></th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach($ticket->pieces as $piece)
                                                        <tr>
                                                            <td class="pl-5 text-muted font-weight-bold align-middle">{{ strtoupper($piece->piece->designation) }}</td>
                                                            <td class="pl-5 font-weight-bold text-gray-700 align-middle">{{ strtoupper($piece->piece->reference) }}</td>
                                                            <td class="text-center text-muted font-weight-bold align-middle">{{ ucfirst($piece->quantity) }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <span class="form-text text-muted">{!! trans('You must select the tasks to be performed in this ticket. The Technician can add more if necessary.') !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    @endif

                    <!--begin::Card-->
                    <div class="card card-custom">
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
                                    <label class="col-xl-3 col-lg-3 col-form-label">{{ __('Created By') }}</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="svg-icon svg-icon-2x">
                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo6/dist/../src/media/svg/icons/Communication/Address-card.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
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
                                                value="{{ strtoupper($ticket->commercial->name) }}"
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
                                        <span class="form-text text-muted">{!! trans('This is Commercial who created this ticket. This value cannot be changed.') !!}</span>
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
                                                value="{{ Carbon\Carbon::parse(intval(substr($ticket->createdAt, 0, 10)))->format("d/m/Y H:i") }}"
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
                                        <span class="form-text text-muted">{!! trans('This is the date of creation of this ticket. This value cannot be changed.') !!}</span>
                                    </div>
                                </div>

                                @if ($ticket->deletedAt)
                                    <!--begin::Form Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <a href="{{ route('ticket.enable.id', ['id' => $ticket->id, 'code' => $ticket->code]) }}" onclick="return confirm('{{ __('Are you sure you want to enable this Ticket ?') }}')" type="button" class="btn btn-light-primary font-weight-bold btn-sm">{{ __('Enable this Ticket?') }}</a>
                                            <p class="form-text text-muted py-2">
                                                <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                                {!! trans('This Ticket has been inactive since <code class="font-size-sm">:deletedAt</code>. If it is useful, you can enable it.', ['deletedAt' => Carbon\Carbon::parse(intval(substr($ticket->deletedAt, 0, 10)))->format("d/m/Y H:i")]) !!}
                                            </p>
                                        </div>
                                    </div>
                                @else
                                    <!--begin::Form Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <a href="{{ route('ticket.disable.id', ['id' => $ticket->id, 'code' => $ticket->code]) }}" onclick="return confirm('{{ __('Are you sure you want to disable this Ticket ?') }}')" type="button" class="btn btn-light-info font-weight-bold btn-sm">{{ __('Disable this Ticket?') }}</a>
                                            <p class="form-text text-muted py-2">
                                                <span class="font-weight-bolder text-danger">IMPORTANT :</span>
                                                {!! trans('If you choose to disable this Ticket, it will automatically be deactivated and will no longer be usable in your operations.') !!}
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
