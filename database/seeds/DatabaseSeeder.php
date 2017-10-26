<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenderTableSeeder::class);
        $this->call(RaceTableSeeder::class);
        $this->call(ReligionTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
