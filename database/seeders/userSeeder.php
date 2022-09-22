<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'Superadmin',
            'email' => 'superadmin@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '1'
        ]);

        DB::table('users')->insert([
            'name' =>'Ariful Islam',
            'email' => 'arifulislam@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'name' =>'Borhan Uddin',
            'email' => 'borhanuddin@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'name' =>'Dipu Islam',
            'email' => 'dipuislam@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'name' =>'Emam Miah',
            'email' =>  'emammiah@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'name' => 'Fahim Sarkar',
            'email' => 'fahimsarkar@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'name' => 'Giash Uddin',
            'email' => 'Giashuddin@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Hafiz Miah',
            'email' => 'hafizmiah@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Imran Mahmud',
            'email' => 'imranmahmud@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Jamal kha',
            'email' => 'jamalkha@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Kamal Ahmed',
            'email' => 'Kamalahmed@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Lalon Fokir',
            'email' => 'lalonfokir@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Monsur Mondol',
            'email' => 'monsurmondol@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Nasir Uddin',
            'email' => 'nasiruddin@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Osman Mridha',
            'email' => 'osmanmridha@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Polash khan',
            'email' => 'polashkhan@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Quddus Miah',
            'email' => 'quddusmiah@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Rasel Ahmed',
            'email' => 'raselahmed@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Shariful Islam',
            'email' => 'sharifulislam@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Tipu Sultan',
            'email' => 'tipusultan@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Uttam Kumar',
            'email' => 'uttamkumar@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Vicky Basu',
            'email' => 'vickybasu@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Wahid Khan',
            'email' => 'wahidkhan@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Yunus Miah',
            'email' => 'yunusmiah@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Zahid Hossain',
            'email' => 'zahidhossain@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Manik kha',
            'email' => 'manikkha@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);
    }
}
