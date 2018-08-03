<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Place;

class Filesplace extends Model
{
    protected $guarded   = [];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
