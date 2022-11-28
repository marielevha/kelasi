<?php
/**
 * Created by IntelliJ IDEA.
 * User: maeva
 * Date: 20/11/22
 * Time: 04:40
 */

namespace App\Services;


use App\Models\Vzit\Post;

class PostService
{
    public function posts()
    {
        return Post::withTrashed()
            ->where('deleted_at', null)
            ->get();
    }
    public function get_all_deleted_tickets()
    {
        return Post::onlyTrashed()->get();
    }
    public function get_all_tickets_by_status()
    {
        return [];
    }
}
