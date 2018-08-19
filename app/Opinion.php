<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $guarded = [];

    public function opinionable()
    {
        return $this->morphTo();
    }
}
