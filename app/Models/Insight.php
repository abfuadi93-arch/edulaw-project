<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insight extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'cover_image',
        'excerpt',
        'content',
        'author',
        'reading_time',
        'is_published',
        'is_featured',
        'published_at',
    ];

    protected $casts = [
        'reading_time' => 'integer',
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
    ];
}
