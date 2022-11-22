<?php

namespace App\Http\Controllers\Vzit;

use App\Http\Controllers\Controller;
use App\Models\Vzit\Country;
use App\Services\CountryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    /**
     * @var CountryService
     */
    private $countryService;

    public function __construct()
    {
        #Config ACL
        $this->middleware(['role:admin|super-admin'], ['only' => ['index']]);
        $this->middleware(['role:admin|super-admin'], ['only' => ['create', 'store']]);
        $this->middleware(['role:admin|super-admin'], ['only' => ['edit', 'update']]);

        #Initialize user service
        $this->countryService = new CountryService();
    }

    public function index()
    {
        $listOfCountries = $this->countryService->index();
        $listOfDisabledCountries = $this->countryService->get_all_deleted_countries();

        return view('administrator.country.index')
            ->with('listOfCountries', $listOfCountries)
            ->with('listOfDisabledCountries', $listOfDisabledCountries);
    }

    /**
     * @return Response
     */
    public function create()
    {
        return view('administrator.country.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:countries'],
        ]);

        $response = $this->countryService->create_country($request);

        if (!$response) {
            /**
             * Something Wrong - 400 - 401
             */
            return back()->with('error', trans('user.errors.something-wrong'));
        }

        /**
         * Redirect to List of Countries
         */
        return redirect()
            ->route('country.index')
            ->with('info', trans('country.info.country-created', ['name' => $request->name]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $slug
     * @return Response
     */
    public function edit($slug)
    {
        $country = $this->countryService->get_by_slug($slug);
        if (is_null($country)) {
            return abort(404);
        }

        return view('administrator.country.create', [
            'country' => $country,
        ]);
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        if (!$slug == Str::slug($request->name, '-')) {
            $request->validate([
                'name' => ['required', 'string', 'max:255', 'unique:countries'],
            ]);
        }

        $country = $this->countryService->update_country_by_slug($slug, $request);
        /**
         * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
         */
        if (!$country) {
            return abort(404);
        }

        /**
         * REDIRECT USER TO LOGOUT ROUTE
         */
        return redirect()->route('country.index')->with('info', trans('commercial-agencies.infos.agency-updated', ['name' => $request->name]));
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function disable_with_slug(Request $request, $slug)
    {
        $response = $this->countryService->disable_country_by_slug($slug);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('country.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('country.index')->with('info', trans('commercial-agencies.infos.agency-disabled-confirm', ['name' => $request->name]));
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function enable_with_slug(Request $request, $slug)
    {
        $response = $this->countryService->enable_country_by_slug($slug);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('country.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('country.index')->with('info', trans('commercial-agencies.infos.agency-enabled-confirm', ['name' => $request->name]));
    }
}
