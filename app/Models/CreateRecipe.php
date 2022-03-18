<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateRecipe extends Model
{
    protected $fillable = [
        'user_id', 'recipe_name', 'recipe_desc', 'ingredients'
    ];
    use HasFactory;
}
