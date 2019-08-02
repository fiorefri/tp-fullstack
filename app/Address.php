<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use softDeletes;

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
