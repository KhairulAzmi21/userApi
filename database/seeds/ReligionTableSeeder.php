<?php

use Illuminate\Database\Seeder;
use App\Religion;

class ReligionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = [
            'Islam',
            'Buddist',
            'Hindu',
            'Christian',
            'Others'
        ];

        foreach ($labels as $label) {
            Religion::create([
                'label' => $label,
            ]);
        }
    }
}
