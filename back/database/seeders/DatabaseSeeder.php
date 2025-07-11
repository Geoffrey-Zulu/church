<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create roles
        $superadminRole = Role::firstOrCreate(['name' => 'superadmin']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Create superadmin user
        $superadmin = User::firstOrCreate([
            'email' => 'zulugeoffrey034@gmail.com',
        ], [
            'name' => 'Super Admin',
            'password' => bcrypt('password'),
        ]);
        $superadmin->assignRole($superadminRole);
    }
}
