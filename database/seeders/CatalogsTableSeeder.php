<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->insert([
            'name' => 'A',
            'price' => 'B',
            'evaluation' => 'C',
            'issue_date' => 'D',
            'revenue' => 'E',
            'game_type' => 'F'

        ]);
    }
}
