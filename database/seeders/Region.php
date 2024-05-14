<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Region extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            [
                'name' => 'Prague',
                'latitude' => 50.0873,
                'longitude' => 14.4378,
                'country' => 'Czech Republic'
            ],
            [
                'name' => 'Vienna',
                'latitude' => 48.2083,
                'longitude' => 16.3738,
                'country' => 'Austria'
            ],
            [
                'name' => 'Bratislava',
                'latitude' => 48.1489,
                'longitude' => 17.1075,
                'country' => 'Slovakia'
            ],
            [
                'name' => 'Budapest',
                'latitude' => 47.5171,
                'longitude' => 19.0781,
                'country' => 'Hungary'
            ],
            [
                'name' => 'Belgrade',
                'latitude' => 44.8186,
                'longitude' => 20.4673,
                'country' => 'Serbia'
            ],
            [
                'name' => 'Sofia',
                'latitude' => 42.6975,
                'longitude' => 23.3237,
                'country' => 'Bulgaria'
            ],
            [
                'name' => 'Bucharest',
                'latitude' => 44.4323,
                'longitude' => 26.1063,
                'country' => 'Romania'
            ],
            [
                'name' => 'Chișinău',
                'latitude' => 47.0115,
                'longitude' => 28.6919,
                'country' => 'Moldova'
            ],
            [
                'name' => 'Chernivtsi',
                'latitude' => 48.2924,
                'longitude' => 25.9229,
                'country' => 'Ukraine'
            ],
            [
                'name' => 'Krakow',
                'latitude' => 50.0614,
                'longitude' => 19.9419,
                'country' => 'Poland'
            ]
        ];

        foreach ($regions as $key => $value) {
            \App\Models\Region::updateOrCreate(['id' => $key + 1], $value);
        }
    }
}
