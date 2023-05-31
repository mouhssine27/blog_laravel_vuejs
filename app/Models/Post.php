<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function admins(){
        return $this->belongsTo(Admin::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
    public function scopePopular($query)
    {
        return $query->orderBy('title_en', 'desc')->take(4);
    }

   
}
