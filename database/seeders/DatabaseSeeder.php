<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Tenant::factory(5)->create();
        // \App\Models\Event::factory(10)->create();

        // $this->call([TenantSeeder::class]);
        $this->call([UserSeeder::class]);
    }
}
