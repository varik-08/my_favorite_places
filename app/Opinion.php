<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $guarded = [];

    public function scopeCountLike($query)
    {
        return $query->where('type',1);
    }

    public function scopeCountDislike($query)
    {
        return $query->where('type',0);
    }

    public function opinionable()
    {
        return $this->morphTo();
    }
}
