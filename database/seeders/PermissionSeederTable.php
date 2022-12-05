<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     * @example php artisan db:seed --force --class PermissionSeederTable
     *
     * @return void
     */
    public function run()
    {
        $r1 = Role::firstOrCreate(["name" => "Superadmin"]);
        $r2 = Role::firstOrCreate(["name" => "Admin"]);
        $r3 = Role::firstOrCreate(["name" => "User"]);

        $p1 = Permission::firstOrCreate(['name' => 'manage users']);

        $r1->givePermissionTo('manage users');

        $user = User::first();
        if ( !empty($user) ) {
            $user->assignRole($r1);
            $user->assignRole($r2);
            $user->assignRole($r3);
        }
    }
}
