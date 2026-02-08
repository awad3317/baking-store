<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'icon', 'sort_order', 'is_active'];
}
