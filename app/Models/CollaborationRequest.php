<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollaborationRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'institution',
        'work_area',
        'message',
        'status',
    ];
}
