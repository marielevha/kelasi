<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 20/11/22
 * Time: 17:56
 */

namespace App\Services;



use App\Models\Vzit\Country;
use Illuminate\Support\Str;

class CountryService
{
    public function index()
    {
        return Country::withTrashed()
            //->withCount('cities')
            ->where('deleted_at', null)
            ->get();
    }

    public function get_all_deleted_countries()
    {
        return Country::onlyTrashed()->get();
    }

    public function get_by_id($id)
    {
        return Country::find($id);
    }

    public function get_by_slug($slug)
    {
        return Country::withTrashed()->where('slug', $slug)->first();
    }

    public function count_all_countries()
    {
        return Country::withTrashed()->count();
    }

    public function create_country($data)
    {
        $country = new Country();
        $country->name = $data->name;
        $country->description = $data->description;
        $country->slug = Str::slug($data->name, '-');
        return $country->save();
    }

    public function update_country_by_slug($slug, $data)
    {
        $country = Country::where('slug', $slug)->where('deleted_at', null)->first();

        return $country->update([
            'name' => $data->name,
            'description' => $data->description,
            'slug' => Str::slug($data->name, '-'),
        ]);
    }
}
