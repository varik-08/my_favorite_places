<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $guarded = [];

    public function scopeCountLike($query)
    {
        return $query->where('type',1)->count();
    }

    public function scopeCountDislike($query)
    {
        return $query->where('type',0)->count();
    }

    public function opinionable()
    {
        return $this->morphTo();
    }
}
