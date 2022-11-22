<?php

namespace App\Models\Vzit;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'country_id',
        'user_id',
    ];

    public function events()
    {
        return $this->belongsTo(Event::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class)->withTrashed();
            //->where('deleted_at', null)->orWhere('deleted_at','<>', null);
    }

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    #Treatments
    public static function booted()
    {
        static::creating(function ($country) {
            if (auth()->check()) $country->user_id = auth()->id();
            else $country->user_id = 1;
        });
    }

    /*public function scopeOrderByName($query)
    {
        return $query->orderBy('name');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%');
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
