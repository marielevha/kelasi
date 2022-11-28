<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 20/11/22
 * Time: 04:40
 */

namespace App\Http\Controllers\Vzit;

use App\Http\Controllers\Controller;
use App\Models\Vzit\City;
use App\Services\CityService;
use App\Services\CountryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class CityController extends Controller
{
    /**
     * @var CityService
     */
    private $cityService;

    /**
     * @var CountryService
     */
    private $countryServices;

    public function __construct()
    {
        #Config ACL
        $this->middleware(['role:admin|super-admin'], ['only' => ['index']]);

        #Initialize user service
        $this->cityService = new CityService();
        $this->countryServices = new CountryService();
    }

    /**
     * @return Response
     */
    public function index()
    {
        $listOfCities = $this->cityService->index();
        $listOfAllCities = $this->cityService->get_all();
        $listOfDisabledCities = $this->cityService->get_all_deleted_cities();

        return view('administrator.city.index')
            ->with('listOfCities', $listOfCities)
            ->with('listOfAllCities', $listOfAllCities)
            ->with('listOfDisabledCities', $listOfDisabledCities);
    }

    /**
     * @return Response
     */
    public function create()
    {
        $countries = $this->countryServices->index();

        return view('administrator.city.create', [
            'countries' => $countries,
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:cities'],
        ]);


        if ((int) !$request->country) {
            return back()->with('error', trans('commercial-agencies.errors.bank-required'));
        }

        $response = $this->cityService->create_city($request);

        if (!$response) {
            /**
             * Something Wrong - 400 - 401
             */
            return back()->with('error', trans('user.errors.something-wrong'));
        }

        /**
         * Redirect to List of Cities
         */
        return redirect()
            ->route('city.index')
            ->with('info', trans('city.info.city-created', ['name' => $request->name]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $slug
     * @return Response
     */
    public function edit($slug)
    {
        $countries = $this->countryServices->index();

        $city = $this->cityService->get_by_slug($slug);
        if (is_null($city)) {
            return abort(404);
        }

        return view('administrator.city.create', [
            'city' => $city,
            'countries' => $countries,
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
                'name' => ['required', 'string', 'max:255', 'unique:cities'],
            ]);
        }

        if ((int) !$request->country) {
            return back()->with('error', trans('commercial-agencies.errors.bank-required'));
        }

        $city = $this->cityService->update_city_by_slug($slug, $request);
        /**
         * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
         */
        if (!$city) {
            return abort(404);
        }

        /**
         * REDIRECT USER TO LOGOUT ROUTE
         */
        return redirect()->route('city.index')->with('info', trans('commercial-agencies.infos.agency-updated', ['name' => $request->name]));
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function disable_with_slug(Request $request, $slug)
    {
        $response = $this->cityService->disable_city_by_slug($slug);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('city.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('city.index')->with('info', trans('commercial-agencies.infos.agency-disabled-confirm', ['name' => $request->name]));
    }

    /**
     * @param Request $request
     * @param string $slug
     * @return RedirectResponse
     */
    public function enable_with_slug(Request $request, $slug)
    {
        $response = $this->cityService->enable_city_by_slug($slug);
        if (!$response) {
            /**
             * CREATE FLASH MESSAGES TO DISPLAY ERRORS IN CURRENT PAGE
             */
            return redirect()->route('city.index')->with('error', trans('user.errors.something-wrong'));
        }

        return redirect()->route('city.index')->with('info', trans('commercial-agencies.infos.agency-enabled-confirm', ['name' => $request->name]));
    }
}
