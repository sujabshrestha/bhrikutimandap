<?php

namespace Venue\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Venue extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'description',
        'image_id',
        'price'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
