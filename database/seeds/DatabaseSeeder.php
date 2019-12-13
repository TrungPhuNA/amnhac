<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call([
//            ProvincesTableSeeder::class,
//        ]);
        try{

			\DB::table('admins')->insert([
				'name' => 'TrungPhuNA',
				'email' => 'phupt.admin94@gmail.com',
				'password' => bcrypt('123456789')
			]);
			\DB::table('admins')->insert([
				'name' => 'Admin',
				'email' => 'admin@gmail.com',
				'password' => bcrypt('abcd1234')
			]);
		}catch (\Exception $exception){
			Log::error("Seed : ". $exception->getMessage());
		}
    }
}
