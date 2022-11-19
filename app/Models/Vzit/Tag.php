<?php

namespace App\Models\Vzit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function events()
    {
        return $this->belongsTo(Event::class);
    }

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
