<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

class MyNotes extends Model
{
    protected static function boot()
    {
        parent::boot();

        DB::table('my_notes')->insert([
            [
                'id' => 1,
                'title' => 'My first note',
                'description' => 'This is my first note.',
                'date' => '2022-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'My second note',
                'description' => 'This is my second note.',
                'date' => '2022-02-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'My third note',
                'description' => 'This is my third note.',
                'date' => '2022-03-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
