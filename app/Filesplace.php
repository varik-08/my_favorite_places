<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Place;

class Filesplace extends Model
{
    protected $guarded = [];

    public function rating()
    {
        return $this->opinion()->countLike() -
            $this->opinion()->countDislike();
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
