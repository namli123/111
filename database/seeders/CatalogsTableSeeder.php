<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }
    public function generateRandomgametype() {
        $Gametype = ['行動',''];
        return $Gametype[rand(0, count($Gametype)-1)];

    }


    public function run()
    {
        for ($i=0; $i<25; $i++)
        {
        $name = $this->generateRandomName();
        $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
        $gametype = $this ->generateRandomGametype();
        DB::table('catalogs')->insert([
            'name' => $name,
            'mid' => rand(1,25),
            'price' => rand(90,500),
            'evaluation' =>rand(90,500),
            'issue_date' => $random_datetime,
            'revenue' => rand(1000, 9000),
            'game_type' => $gametype,
            'created_at' => $random_datetime,
            'updated_at' => $random_datetime

        ]);
    }
    }
        
}

