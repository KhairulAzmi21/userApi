<?php

use Illuminate\Database\Seeder;
use App\Gender;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = [
            'Male',
            'Female',
        ];

        foreach ($labels as $label) {
            Gender::create([
                'label' => $label,
            ]);
        }
    }
}
