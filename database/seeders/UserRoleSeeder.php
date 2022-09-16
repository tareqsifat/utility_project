<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->truncate();
        for($i=1; $i <= 3; $i++) {
            if($i == 1){
                DB::table('user_roles')->insert([
                    'name' => 'admin',
                    'serial' => $i,
                    'creator' => 1,
                    'slug' => 'admin',
                    'status' => 1
                ]);
            }
            if($i == 2){
                DB::table('user_roles')->insert([
                    'name' => 'technician',
                    'serial' => $i,
                    'creator' => 1,
                    'slug' => 'technician',
                    'status' => 1
                ]);
                
            }
            if($i == 3){
                DB::table('user_roles')->insert([
                    'name' => 'user',
                    'serial' => $i,
                    'creator' => 1,
                    'slug' => 'user',
                    'status' => 1
                ]);
            }
        }
    }
}
