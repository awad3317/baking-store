<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_free_shipping' => 'boolean',
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'bundle_items')->withPivot('quantity');
    }
}
