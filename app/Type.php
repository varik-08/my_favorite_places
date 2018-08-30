<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Type extends Model
{
    protected $guarded = [];

    public function places()
    {
        return $this->hasMany(Place::class);
    }

    public function selectType()
    {
        switch (App::getLocale())
        {
            case "ru":
                $name = $this->name;
                break;
            case "en":
                $name = $this->nameEn;
                break;
        }
        return $name;
    }
}
