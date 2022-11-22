<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 20/11/22
 * Time: 18:18
 */

namespace App\Services;


use App\Models\Vzit\City;
use Illuminate\Support\Str;

class CityService
{
    public function index()
    {
        return City::with('country')
            ->where('deleted_at', null)
            ->get();
    }

    public function get_all()
    {
        return City::withTrashed()
            ->with('country')
            ->get();
    }

    public function get_all_deleted_cities()
    {
        return City::onlyTrashed()->get();
    }

    public function get_by_slug($slug)
    {
        return City::withTrashed()->where('slug', $slug)->first();
    }

    public function update_city_by_slug($slug, $data)
    {
        $city = City::where('slug', $slug)->where('deleted_at', null)->first();

        return $city->update([
            'name' => $data->name,
            'description' => $data->description,
            'slug' => Str::slug($data->name, '-'),
        ]);
    }

    public function disable_city_by_slug($slug)
    {
        return City::where('slug', $slug)->first()->delete();
    }

    public function enable_city_by_slug($slug)
    {
        return City::withTrashed()->where('slug', $slug)->first()->restore();
    }

    public function create_city($data)
    {
        $city = new City();
        $city->name = $data->name;
        $city->description = $data->description;
        $city->country_id = $data->country;
        $city->slug = Str::slug($data->name, '-');
        return $city->save();
    }
}
