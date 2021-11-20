<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $guarded = [];

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
