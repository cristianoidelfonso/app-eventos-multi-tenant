<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Cristiano',
            'email'             => 'cristiano@email.com',
            'email_verified_at' => now(),
            'password'          => bcrypt(12345678),
            'remember_token'    => Str::random(10),
        ]);
        User::create([
            'name'              => 'User Teste 1 Tenant 1',
            'tenant_id'         => 1,
            'email'             => 'user1@email.com',
            'email_verified_at' => now(),
            'password'          => bcrypt(12345678),
            'remember_token'    => Str::random(10),
        ]);
        User::create([
            'name'              => 'User Teste 2 Tenant 1',
            'tenant_id'         => 1,
            'email'             => 'user2@email.com',
            'email_verified_at' => now(),
            'password'          => bcrypt(12345678),
            'remember_token'    => Str::random(10),
        ]);
        User::create([
            'name'              => 'User Teste 3 Tenant 2',
            'tenant_id'         => 2,
            'email'             => 'user3@email.com',
            'email_verified_at' => now(),
            'password'          => bcrypt(12345678),
            'remember_token'    => Str::random(10),
        ]);

    }
}
