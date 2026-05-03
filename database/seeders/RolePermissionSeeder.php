<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        /*
        |--------------------------------------------------------------------------
        | PERMISSIONS
        |--------------------------------------------------------------------------
        */

        $permissions = [
            'view dashboard',
            'manage users',
            'manage roles',
            'manage settings',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        /*
        |--------------------------------------------------------------------------
        | ROLES
        |--------------------------------------------------------------------------
        */

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $manager = Role::firstOrCreate(['name' => 'manager']);
        $user = Role::firstOrCreate(['name' => 'user']);

        // Assign permissions
        $admin->syncPermissions(Permission::all());

        $manager->syncPermissions([
            'view dashboard',
            'manage users',
        ]);

        $user->syncPermissions([
            'view dashboard',
        ]);

        /*
        |--------------------------------------------------------------------------
        | USERS (DEMO ACCOUNTS)
        |--------------------------------------------------------------------------
        */

        $adminUser = User::firstOrCreate(
            ['email' => 'admin@demo.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
            ]
        );
        $adminUser->assignRole($admin);

        $managerUser = User::firstOrCreate(
            ['email' => 'manager@demo.com'],
            [
                'name' => 'Manager User',
                'password' => Hash::make('password'),
            ]
        );
        $managerUser->assignRole($manager);

        $normalUser = User::firstOrCreate(
            ['email' => 'user@demo.com'],
            [
                'name' => 'Normal User',
                'password' => Hash::make('password'),
            ]
        );
        $normalUser->assignRole($user);
    }
}