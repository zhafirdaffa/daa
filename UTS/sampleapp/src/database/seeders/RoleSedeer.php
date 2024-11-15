<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure roles exist
        $pembeliRole = Role::firstOrCreate(['name' => 'Pembeli', 'guard_name' => 'web']);
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);

        // Assign roles to specific users based on email
        $PembeliUser = User::where('email', 'pbl@admin.com')->first();
        $adminUser = User::where('email', 'admin@example.com')->first();

        if ($PembeliUser) {
            $PembeliUser->assignRole($pembeliRole);
        }

        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }
    }
}