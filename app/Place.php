<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;
use App\Opinion;
use Illuminate\Support\Facades\App;

class Place extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function  rating()
    {
        return $this->opinion()->countLike() -
            $this->opinion()->countDislike();
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

    public function files()
    {
        return $this->hasMany(Filesplace::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function selectType()
    {
        switch (App::getLocale())
        {
            case "ru":
                $name = $this->type()->value('name');
                break;
            case "en":
                $name = $this->type()->value('nameEn');
                break;
        }
        return $name;
    }

    public function opinion()
    {
        return $this->morphMany(Opinion::class,'opinionable');
    }
}
