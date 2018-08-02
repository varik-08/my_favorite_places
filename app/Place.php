<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Place extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function getTypAttribute()
    {
        return Place::find($this->type_id)->type()->value('name');
    }

    public function files()
    {
        return $this->hasMany(Filesplace::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
