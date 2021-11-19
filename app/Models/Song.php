<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


    class Song extends Model
    {
        use HasFactory;

        protected $guarded = [];

        public function scopePublished($query) {
            return $query->where('publish', 1);
        }

        public function scopeUnpublished($query) {
            return $query->where('publish', 0);
        }
    }
