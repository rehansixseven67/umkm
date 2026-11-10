<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'create-products',
            'edit-products',
            'delete-products',
            'view-products',
            'create-category',
            'edit-category',
            'delete-category',
            'view-category'
         ];

          // Looping and Inserting Array's Permissions into Permission Table
         foreach ($permissions as $permission) {
            Permission::findOrcreate($permission, 'web');
          }
         app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
