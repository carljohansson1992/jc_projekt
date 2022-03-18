<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'user_id', 'recipe_name', 'recipe_desc', 'ingredients'
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    use HasFactory;
}
