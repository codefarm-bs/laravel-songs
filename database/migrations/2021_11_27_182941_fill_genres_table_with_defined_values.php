<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FillGenresTableWithDefinedValues extends Migration
{
    public function up()
    {
//        foreach (config('default.genre') as $genre)
//            \Illuminate\Support\Facades\DB::table('genres')->insert([
//                'name' => $genre,
//                'created_at' => now(),
//                'updated_at' => now(),
//            ]);
    }
}
