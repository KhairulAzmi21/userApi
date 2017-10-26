<?php

use Illuminate\Database\Seeder;
use App\Race;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = [
            'Chinese',
            'Indian',
            'Malay',
            'Others'
        ];

        foreach ($labels as $label) {
            Race::create([
                'label' => $label,
            ]);
        }
    }
}
