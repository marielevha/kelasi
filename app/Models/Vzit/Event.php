<?php

namespace App\Models\Vzit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description',
        'address', 'properties',
        'start_date', 'end_date', 'published_at',
        'category_id', 'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cities()
    {
        return $this->belongsTo(City::class);
    }

    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }
}
