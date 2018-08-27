<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $guarded = [];

    public function scopeCountLikeOrDislike($query, $type)
    {
        return $query->where('type',$type)->count();
    }

    public function opinionable()
    {
        return $this->morphTo();
    }
}
