<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Recipe extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_recipe_of_the_week' => 'boolean',
    ];

    /**
     * إرجاع مستوى الصعوبة باللغة العربية
     * الاستخدام: $recipe->difficulty_label
     */
    protected function difficultyLabel(): Attribute
    {
        return Attribute::make(
            get: fn () => match ($this->difficulty) {
                'easy'   => 'سهلة',
                'medium' => 'متوسطة',
                'hard'   => 'صعبة',
                default  => $this->difficulty, 
            }
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function steps()
    {
        return $this->hasMany(RecipeStep::class);
    }

    public function bundle()
    {
        return $this->hasOne(Bundle::class);
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
}
