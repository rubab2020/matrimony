<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            1 => ['name' => 'User Management', 'guard_name' => 'web'],
            2 => ['name' => 'Order Management', 'guard_name' => 'web'],
            3 => ['name' => 'Setting Management', 'guard_name' => 'web'],
        ];

        foreach ($permissions as $key => $value) {
            DB::table('permissions')->updateOrInsert(['id' => $key], $value);
        }
    }
}
