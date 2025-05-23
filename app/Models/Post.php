<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title','content','image_path','user_id','category_id'
    ];

    public function categories()  {
        return $this->belongsToMany(Category::class);
    }
}
