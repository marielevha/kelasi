<?php

namespace App\Models\Vzit;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /*public function rubrique()
    {
        return $this->belongsTo(Rubrique::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }*/

    #Treatments
    public static function booted()
    {
        static::creating(function ($country) {
            if (auth()->check()) $country->user_id = auth()->id();
            else $country->user_id = 1;
        });
    }

    /*public function scopeOrderByTitle($query)
    {
        return $query->orderBy('title');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%'.$search.'%');
            });
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            }
            elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        });
    }*/
}
