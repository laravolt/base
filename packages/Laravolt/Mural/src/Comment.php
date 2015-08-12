<?php
namespace Laravolt\Mural;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = ['body'];

    public function author()
    {
        return $this->belongsTo(config('auth.model'));
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
