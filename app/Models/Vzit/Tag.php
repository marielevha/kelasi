<?php

namespace App\Models\Vzit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
