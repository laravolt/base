<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Votee\Traits\Voteable;

class Post extends Model
{
    use Voteable;

    protected function getPermalinkAttribute()
    {
        return route('posts.show', $this->id);
    }
}
