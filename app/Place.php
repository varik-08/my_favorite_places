<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;
use App\Opinion;

class Place extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function  rating()
    {
        return $this->opinion()->countLikeOrDislike('1') -
            $this->opinion()->countLikeOrDislike('0');
    }
    public function overallRating()
    {
        $photos = $this->files;
        $ratingPhotos = 0;
        foreach ($photos as $photo)
        {
            $ratingPhotos += $photo->rating();
        }
        return$this->rating() + $ratingPhotos;
    }

    public function getOverRatingAttribute()
    {
        return $this->overallRating();
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
