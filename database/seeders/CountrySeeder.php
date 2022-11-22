<?php

namespace Database\Seeders;

use App\Models\Vzit\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(5)->create(['account_id' => $account->id]);
        //Country::factory(30);
        Country::create([
            'name' => 'Country One',
            'description' => 'Description',
            'slug' => 'slug-one'
        ]);
        Country::create([
            'name' => 'Country Two',
            'description' => 'Description',
            'slug' => 'slug-two'
        ]);
        Country::create([
            'name' => 'Country Three',
            'description' => 'Description',
            'slug' => 'slug-three'
        ]);
        Country::create([
            'name' => 'Country Four',
            'description' => 'Description',
            'slug' => 'slug-four'
        ]);
        Country::create([
            'name' => 'Country Five',
            'description' => 'Description',
            'slug' => 'slug-ive'
        ]);
    }
}
