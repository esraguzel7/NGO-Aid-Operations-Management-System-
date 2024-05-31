<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportTypes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            [
                'name' => 'Cash',
                'is_stockable' => false,
            ],
            [
                'name' => 'Food',
                'is_stockable' => true,
            ],
            [
                'name' => 'Clothing',
                'is_stockable' => true,
            ],
            [
                'name' => 'Furniture',
                'is_stockable' => true,
            ],
        ];

        foreach ($regions as $key => $value) {
            \App\Models\SupportTypes::updateOrCreate(['id' => $key + 1], $value);
        }
    }
}
