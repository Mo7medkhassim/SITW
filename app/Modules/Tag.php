<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function Posts()
    {
        return $this->belongsToMany('App\Modules\Post', 'tag_posts');
    }
}
