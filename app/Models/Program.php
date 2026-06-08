<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'rumpun',
        'format',
        'level',
        'duration',
        'poster',
        'summary',
        'learns',
        'content',
        'speaker',
        'is_active',
        'is_featured',
        'started_at',
        'ended_at',
        'archive_url',
        'sort_order',
    ];

    protected $casts = [
        'learns' => 'array',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'started_at' => 'date',
        'ended_at' => 'date',
        'sort_order' => 'integer',
    ];
}
