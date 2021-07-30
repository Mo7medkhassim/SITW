<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Tags()
    {
        return $this->belongsToMany('App\Modules\Tag', 'tag_posts')->withTimestamps();
    }

    public function Categories()
    {
        return $this->belongsToMany('App\Modules\Category', 'category_Posts')->withTimestamps();
    }
}
