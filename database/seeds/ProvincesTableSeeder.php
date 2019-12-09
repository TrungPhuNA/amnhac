<?php

use Illuminate\Database\Seeder;
use App\Helpers\FunctionHelpers;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = database_path() . '/seeds/provinces.sql';
        \DB::unprepared(file_get_contents($path));
        $this->command->info('Provinces table seeded!');
    }
}
