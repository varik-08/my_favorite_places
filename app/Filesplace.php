<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Place;

class Filesplace extends Model
{
    protected $guarded = [];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function opinion()
    {
        return $this->morphMany(Opinion::class,'opinionable');
    }

    public function  getRatingAttribute()
    {
        return Filesplace::find($this->id)->opinion->where('type','1')->count() -
            Filesplace::find($this->id)->opinion->where('type','0')->count();
    }

}
