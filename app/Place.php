<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Place extends Model
{
    protected $guarded   = [];
    public $timestamps = false;
    public function getTypAttribute()
    {
        return Type::find($this->type)->value('name');
    }
}
