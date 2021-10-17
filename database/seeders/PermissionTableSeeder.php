<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-management',
            'feedback-list',
            'feedback-delete',
            'hotel-view',
            'hotel-create',
            'hotel-edit',
            'hotel-delete',
            'room-list',
            'room-create',
            'room-edit',
            'room-delete',
            'reservation-list'
            
         ];
      
         foreach ($permissions as $permission) {
             
              DB::table('permissions')->insert(['name' => $permission,'guard_name'=>'web']);
         }
 
    }
}
