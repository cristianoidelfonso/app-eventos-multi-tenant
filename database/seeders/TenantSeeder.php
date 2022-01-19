<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenant::create([
            'name' => 'Loja 1',
        ]);

        Tenant::create([
            'name' => 'Loja 2',
        ]);

        Tenant::create([
            'name' => 'Loja 3',
        ]);

        Tenant::create([
            'name' => 'Loja 4',
        ]);
        
        Tenant::create([
            'name' => 'Loja 5',
        ]);
    }
}
