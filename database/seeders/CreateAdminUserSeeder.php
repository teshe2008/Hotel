<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'admin admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        $role1 = Role::create(['name' => 'hotel-owner']);

        $role1->givePermissionTo( 'feedback-list',
        'feedback-delete',
        'hotel-view',
        'hotel-create',
        'hotel-edit',
        'hotel-delete',
        'room-list',
        'room-create',
        'room-edit',
        'room-delete');

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
