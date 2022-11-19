<?php

namespace App\Http\Controllers\Vzit;

use App\Http\Controllers\Controller;
use App\Models\Vzit\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:city.read'], ['only' => ['index']]);
        $this->middleware(['permission:city.write'], [
            'only' => ['create', 'store', 'edit', 'update']
        ]);
        $this->middleware(['permission:city.delete'], ['only' => 'destroy']);
        $this->middleware(['permission:city.restore'], ['only' => 'restore']);
    }

    public function index()
    {
        $data = [
            'filters' => Request::all('search', 'trashed'),
            'cities' => City::orderByName()
                ->with('user')
                ->filter(Request::only('search', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($city) => [
                    'id' => $city->id,
                    'name' => $city->name,
                    'created_at' => $city->created_at,
                    'deleted_at' => $city->deleted_at,
                    'user' => $city->user ? $city->user->only('name') : null,
                ]
            )
        ];
        return Inertia::render('VZIT/Cities/Index', $data);
    }
}
