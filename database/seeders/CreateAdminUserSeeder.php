<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'motazAdmin',
            'email' => 'motaz@admin.com',
            'password' => bcrypt('mo@ta@z1212'),
            'role' => 'admin',
            'is_active' => true,
        ]);
    }
}
