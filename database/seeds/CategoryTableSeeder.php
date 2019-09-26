<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'header' => 'Sports',
        ]);

        DB::table('categories')->insert([
            'header' => 'Politics',
        ]);

        DB::table('categories')->insert([
            'header' => 'Culture',
        ]);

        DB::table('categories')->insert([
            'header' => 'Social',
        ]);
    }
}
