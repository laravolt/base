<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Mural\CommentableTrait;
use Laravolt\Votee\Traits\Voteable;

class Post extends Model
{
    use Voteable, CommentableTrait;

    protected function getPermalinkAttribute()
    {
        return route('posts.show', $this->id);
    }
}
