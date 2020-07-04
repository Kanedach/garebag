<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    public function garbages()
    {
        return $this->hasMany(Garbage::class);
    }
}
