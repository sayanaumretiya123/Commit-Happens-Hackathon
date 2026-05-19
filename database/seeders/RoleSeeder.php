<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'Administrator with full access to all features',
            ],
            [
                'name' => 'Senior',
                'slug' => 'senior',
                'description' => 'Senior student with advanced permissions',
            ],
            [
                'name' => 'Fresher',
                'slug' => 'fresher',
                'description' => 'Freshman student with basic permissions',
            ],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(
                ['slug' => $role['slug']],
                $role
            );
        }
    }
}
