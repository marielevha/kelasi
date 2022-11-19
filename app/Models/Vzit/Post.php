<?php

namespace App\Models\Vzit;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'address',
        'properties',
        'published_at',
        'category_id',
        'user_id',
    ];

    public function cities()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*public function images()
    {
        return $this->hasMany(Image::class);
    }*/

    /*public function comments()
    {
        return $this->hasMany(Comment::class);
    }*/

    /*public function likes()
    {
        return $this->hasMany(Like::class);
    }*/

    /*public function views()
    {
        return $this->hasMany(View::class);
    }*/

    /*public function post_cities()
    {
        return $this->hasMany(PostCity::class);
    }*/

    /*public function post_packs()
    {
        return $this->hasMany(PostPack::class);
    }*/

    /*public function extensions()
    {
        return $this->hasMany(Extension::class);
    }*/
}
