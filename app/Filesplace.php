<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Place;

class Filesplace extends Model
{
    protected $guarded = [];

    public function rating()
    {
        return $this->opinion()->countLikeOrDislike('1') -
            $this->opinion()->countLikeOrDislike('0');
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function opinion()
    {
        return $this->morphMany(Opinion::class,'opinionable');
    }
}
