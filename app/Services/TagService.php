<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 24/11/22
 * Time: 12:08
 */

namespace App\Services;


use App\Models\Vzit\Tag;
use Illuminate\Support\Str;

class TagService
{

    public function index()
    {
        return Tag::withTrashed()
            //->withCount('posts')
            ->where('deleted_at', null)
            ->get();
    }

    public function get_by_slug($slug)
    {
        return Tag::withTrashed()->where('slug', $slug)->first();
    }

    public function get_all_deleted_tags()
    {
        return Tag::onlyTrashed()->get();
    }

    public function create_tag($data)
    {
        $tag = new Tag();
        $tag->name = $data->name;
        $tag->slug = Str::slug($data->name, '-');
        return $tag->save();
    }

    public function update_tag_by_slug($slug, $data)
    {
        $tag = Tag::where('slug', $slug)->where('deleted_at', null)->first();

        return $tag->update([
            'name' => $data->name,
            'slug' => Str::slug($data->name, '-'),
        ]);
    }

    public function disable_tag_by_slug($slug)
    {
        return Tag::where('slug', $slug)->first()->delete();
    }

    public function enable_tag_by_slug($slug)
    {
        return Tag::withTrashed()->where('slug', $slug)->first()->restore();
    }
}
