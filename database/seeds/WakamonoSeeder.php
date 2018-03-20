<?php

use Illuminate\Database\Seeder;

class WakamonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('wakamonos')->insert([
				'username' => 'firsttest',
				'old' => '17',
				'wantold' => '26',
				'area' => '東京',
				'description' => 'てすと',
			]);

    }
}
