<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $productManager = Role::create(['name' => 'Product Manager']);
        $user = Role::create(['name' => 'User']);

        $admin->givePermissionTo([
            'view-products',
            'create-products',
            'edit-products',
            'delete-products',
            'create-category',
            'edit-category',
            'delete-category'
        ]);

        $productManager->givePermissionTo([
            'create-category',
            'edit-category',
            'delete-category'
        ]);

        $user->givePermissionTo([
            'view-products'
        ]);
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
