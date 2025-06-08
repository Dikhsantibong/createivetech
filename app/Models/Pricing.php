<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $fillable = [
        'title',
        'price',
        'duration',
        'features',
        'category',
        'is_popular',
        'button_text',
        'button_link'
    ];

    protected $casts = [
        'features' => 'array',
        'is_popular' => 'boolean'
    ];
} 