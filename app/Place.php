<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;
use App\Opinion;

class Place extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function getTypAttribute()
    {
        return Place::find($this->id)->type()->value('name');
    }

    public function  getRatingAttribute()
    {
        return Place::find($this->id)->opinion->where('type','1')->count() -
            Place::find($this->id)->opinion->where('type','0')->count();
    }
    public function getOverallRatingAttribute()
    {
        $photos = Place::find($this->id)->files()->get();
        $ratingPhotos = 0;
        foreach ($photos as $photo)
        {
            $ratingPhotos += $photo->rating;
        }
        return Place::find($this->id)->rating + $ratingPhotos;
    }

    public function files()
    {
        return $this->hasMany(Filesplace::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function opinion()
    {
        return $this->morphMany(Opinion::class,'opinionable');
    }
}
