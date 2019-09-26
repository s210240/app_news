<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'header' => 'News 1',
            'content' => 'Content News 1',
            'category_id' => 1
        ]);

        DB::table('items')->insert([
            'header' => 'News 2',
            'content' => 'Content News 2',
            'category_id' => 2
        ]);

        DB::table('items')->insert([
            'header' => 'News 3',
            'content' => 'Content News 3',
            'category_id' => 3
        ]);

        DB::table('items')->insert([
            'header' => 'News 4',
            'content' => 'Content News 4',
            'category_id' => 4
        ]);

        DB::table('items')->insert([
            'header' => 'News 5',
            'content' => 'Content News 5',
            'category_id' => 1
        ]);

        DB::table('items')->insert([
            'header' => 'News 6',
            'content' => 'Content News 6',
            'category_id' => 2
        ]);

        DB::table('items')->insert([
            'header' => 'News 7',
            'content' => 'Content News 7',
            'category_id' => 3
        ]);

        DB::table('items')->insert([
            'header' => 'News 8',
            'content' => 'Content News 8',
            'category_id' => 4
        ]);

        DB::table('items')->insert([
            'header' => 'News 9',
            'content' => 'Content News 9',
            'category_id' => 1
        ]);

        DB::table('items')->insert([
            'header' => 'News 10',
            'content' => 'Content News 10',
            'category_id' => 2
        ]);

        DB::table('items')->insert([
            'header' => 'News 11',
            'content' => 'Content News 11',
            'category_id' => 3
        ]);

        DB::table('items')->insert([
            'header' => 'News 12',
            'content' => 'Content News 12',
            'category_id' => 4
        ]);
    }
}
