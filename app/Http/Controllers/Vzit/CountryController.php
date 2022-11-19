<?php

namespace App\Http\Controllers\Vzit;

use App\Http\Controllers\Controller;
use App\Models\Vzit\Country;
use App\Models\Series;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Inertia\Response;

class CountryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:country.read'], ['only' => ['index']]);
        $this->middleware(['permission:country.write'], [
            'only' => ['create', 'store', 'edit', 'update']
        ]);
        $this->middleware(['permission:country.delete'], ['only' => 'destroy']);
        $this->middleware(['permission:country.restore'], ['only' => 'restore']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = [
            'filters' => Request::all('search', 'trashed'),
            'countries' => Country::orderByName()
                ->with('user')
                ->withCount('cities')
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($country) => [
                    'id' => $country->id,
                    'name' => $country->name,
                    'created_at' => $country->created_at,
                    'deleted_at' => $country->deleted_at,
                    'user' => $country->user ? $country->user->only('name') : null,
                    'cities' => $country->cities_count
                ]
            )
        ];
        //dd($data);
        return Inertia::render('VZIT/Countries/Index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return Inertia::render('Series/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse
     */
    public function store()
    {
        Series::create(
            Request::validate([
                'title' => ['required', 'max:50'],
                'description' => ['nullable', 'min:25', 'max:250'],
                'activated' => ['required'],
            ])
        );
        return Redirect::route('series')->with('success', 'Series created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Series $series
     * @return Response
     */
    public function edit(Series $series)
    {
        $subjects = $series->subjects()
            ->orderByTitle()
            ->get()
            ->map->only('id', 'title', 'activated', 'description');
        $data = [
            'serie' => [
                'id' => $series->id,
                'title' => $series->title,
                'description' => $series->description,
                'activated' => $series->activated,
                'deleted_at' => $series->deleted_at,
                'subjects_count' => count($series->subjects),
                'subjects' => $subjects,
            ]
        ];
        return Inertia::render('Series/Edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Series $series
     * @return RedirectResponse
     */
    public function update(Series $series)
    {
        $series->update(
            Request::validate([
                'title' => ['required', 'max:50'],
                'description' => ['nullable', 'min:25', 'max:250'],
                'activated' => ['required'],
            ])
        );
        return Redirect::back()->with('success', 'Series updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Series $series
     * @return RedirectResponse
     */
    public function destroy(Series $series)
    {
        $series->delete();

        return Redirect::back()->with('success', 'Series deleted.');
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param Series $series
     * @return RedirectResponse
     */
    public function restore(Series $series)
    {
        $series->restore();

        return Redirect::back()->with('success', 'Series restored.');
    }
}
