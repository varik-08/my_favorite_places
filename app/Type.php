<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = [];

    public function places()
    {
        return $this->hasMany(Place::class);
    }
}
