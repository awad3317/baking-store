<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded = [];

    protected $casts = [
        'active' => 'boolean',
        'stars' => 'float',
    ];

    public function getInitialAttribute()
    {
        return mb_substr($this->name, 0, 1);
    }
}
