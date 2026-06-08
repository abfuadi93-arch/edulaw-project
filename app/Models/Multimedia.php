<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Multimedia extends Model
{
    protected $table = 'multimedia';

    protected $fillable = [
        'title',
        'slug',
        'type',
        'thumbnail',
        'summary',
        'platform',
        'external_url',
        'duration',
        'episodes_count',
        'is_featured',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'episodes_count' => 'integer',
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];
}
