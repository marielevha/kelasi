<?php

namespace Database\Seeders;

use App\Models\Vzit\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
        'name' => 'City One',
        'description' => 'Description',
        'slug' => 'slug-one',
            'country_id' => 1
    ]);
        City::create([
            'name' => 'City Two',
            'description' => 'Description',
            'slug' => 'slug-two',
            'country_id' => 2
        ]);
        City::create([
            'name' => 'City Three',
            'description' => 'Description',
            'slug' => 'slug-three',
            'country_id' => 3
        ]);
        City::create([
            'name' => 'City Four',
            'description' => 'Description',
            'slug' => 'slug-four',
            'country_id' => 4
        ]);
        City::create([
            'name' => 'City Five',
            'description' => 'Description',
            'slug' => 'slug-ive',
            'country_id' => 5
        ]);
    }
}
