<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path() . '/database/seeds/sql/regions.sql';
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
