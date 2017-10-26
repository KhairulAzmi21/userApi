<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = [
            'Divorced',
            'Married',
            'Single',
        ];

        foreach ($labels as $label) {
            Status::create([
                'label' => $label,
            ]);
        }
    }
}
