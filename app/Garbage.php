<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garbage extends Model
{
    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }
}
