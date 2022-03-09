<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_name',
        'recipe_desc',
        'ingredients'
    ];

    // public function categories(){
    //     require $this->belongsToMany(Category::class);
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
