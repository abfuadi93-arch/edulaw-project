<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
        ]);

        $admin = User::firstOrCreate(
            ['email' => 'admin@edulawproject.com'],
            [
                'name' => 'Super Admin Edulaw',
                'password' => 'password',
            ]
        );

        $admin->assignRole('Super Admin');
    }
}