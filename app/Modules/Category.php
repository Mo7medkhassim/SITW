<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Posts()
    {
        return $this->belongsToMany('App\Modules\Post', 'category_posts');
    }
}
