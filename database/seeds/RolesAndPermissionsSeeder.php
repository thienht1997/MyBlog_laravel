<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        Permission::create(['name' => 'manage']);
        Permission::create(['name' => 'view']);

        /** @var User $admin */
        $admin = User::find(1);
        $admin->givePermissionTo(Permission::all()->pluck('id'));
    }
}
