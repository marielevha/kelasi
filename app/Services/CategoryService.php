<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 24/11/22
 * Time: 13:29
 */

namespace App\Services;

use App\Models\Vzit\Category;
use Illuminate\Support\Str;


class CategoryService
{
    public function index()
    {
        return Category::withTrashed()
            ->where('deleted_at', null)
            ->get();
    }

    public function get_by_slug($slug)
    {
        return Category::withTrashed()->where('slug', $slug)->first();
    }

    public function get_all_deleted_categories()
    {
        return Category::onlyTrashed()->get();
    }

    public function create_category($data)
    {
        $category = new Category();
        $category->title = $data->title;
        $category->description = $data->description;
        $category->slug = Str::slug($data->title, '-');
        return $category->save();
    }

    public function update_category_by_slug($slug, $data)
    {
        $category = Category::where('slug', $slug)->where('deleted_at', null)->first();

        return $category->update([
            'title' => $data->title,
            'description' => $data->description,
            'slug' => Str::slug($data->title, '-'),
        ]);
    }

    public function disable_category_by_slug($slug)
    {
        return Category::where('slug', $slug)->first()->delete();
    }

    public function enable_category_by_slug($slug)
    {
        return Category::withTrashed()->where('slug', $slug)->first()->restore();
    }
}
