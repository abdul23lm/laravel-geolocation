<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spacephoto extends Model
{
    protected $guarded = [];

    public function space()
    {
        return $this->belongsTo(Space::class, 'space_id', 'id');
    }
}
