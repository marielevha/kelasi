<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Contact;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$name = $this->ask('What is your name?');
        //$name = $this->command->ask('What is your name ?');
        $progress = $this->command->getOutput()->createProgressBar(2);
        $progress->start();
        $progress->advance();

        #Web users
        User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'SuperAdmin',
            'email' => 'sadmin@vzit.com',
            'profile' => env('PROFILE_SUPER_ADMIN'),
        ]);
        $progress->advance();
        User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Admin',
            'email' => 'admin@vzit.com',
            'profile' => env('PROFILE_ADMIN'),
        ]);
        $progress->advance();

        #Api users
        User::factory()->create([
            'first_name' => 'Carols',
            'last_name' => 'DENVER',
            'email' => 'carols@vzit.com',
            'profile' => env('PROFILE_VIEWER'),
        ]);
        $progress->advance();
        User::factory()->create([
            'first_name' => 'Jessica',
            'last_name' => 'JONES',
            'email' => 'jessica@vzit.com',
            'profile' => env('PROFILE_VIEWER'),
        ]);
        $progress->advance();

        #Web users
        User::factory()->create([
            'first_name' => 'Suptech',
            'last_name' => 'MA',
            'email' => 'suptech@vzit.com',
            'profile' => env('PROFILE_ENTERPRISE'),
        ]);
        $progress->advance();
        User::factory()->create([
            'first_name' => 'SupInfo',
            'last_name' => 'MA',
            'email' => 'supinfo@vzit.com',
            'profile' => env('PROFILE_ENTERPRISE'),
        ]);
        $progress->advance();
        /*User::factory(5)->create(['account_id' => $account->id]);
        $progress->advance(5);

        $organizations = Organization::factory(100)
            ->create(['account_id' => $account->id]);
        $progress->advance(100);

        Contact::factory(100)
            ->create(['account_id' => $account->id])
            ->each(function ($contact) use ($organizations) {
                $contact->update(['organization_id' => $organizations->random()->id]);
            });
        $progress->advance(100);*/
        $progress->finish();
    }
}
