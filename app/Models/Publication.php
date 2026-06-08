<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'type',
        'year',
        'cover_image',
        'file_path',
        'summary',
        'description',
        'author',
        'file_size',
        'download_count',
        'is_featured',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'download_count' => 'integer',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];
}
