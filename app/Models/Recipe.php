<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public function categories(){
        require $this->belongsToMany(Category::class);
    }

    public function user(){
        require $this->belongsTo(User::class);
    }
}
