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
            'username' =>'Superadmin',
            'email' => 'superadmin@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '1'
        ]);

        DB::table('users')->insert([
            'username' =>'Ariful Islam',
            'email' => 'arifulislam@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'username' =>'Borhan Uddin',
            'email' => 'borhanuddin@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'username' =>'Dipu Islam',
            'email' => 'dipuislam@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'username' =>'Emam Miah',
            'email' =>  'emammiah@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'username' => 'Fahim Sarkar',
            'email' => 'fahimsarkar@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'username' => 'Giash Uddin',
            'email' => 'Giashuddin@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Hafiz Miah',
            'email' => 'hafizmiah@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Imran Mahmud',
            'email' => 'imranmahmud@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Jamal kha',
            'email' => 'jamalkha@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Kamal Ahmed',
            'email' => 'Kamalahmed@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Lalon Fokir',
            'email' => 'lalonfokir@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Monsur Mondol',
            'email' => 'monsurmondol@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Nasir Uddin',
            'email' => 'nasiruddin@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Osman Mridha',
            'email' => 'osmanmridha@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Polash khan',
            'email' => 'polashkhan@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Quddus Miah',
            'email' => 'quddusmiah@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Rasel Ahmed',
            'email' => 'raselahmed@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Shariful Islam',
            'email' => 'sharifulislam@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Tipu Sultan',
            'email' => 'tipusultan@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Uttam Kumar',
            'email' => 'uttamkumar@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Vicky Basu',
            'email' => 'vickybasu@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Wahid Khan',
            'email' => 'wahidkhan@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Yunus Miah',
            'email' => 'yunusmiah@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Zahid Hossain',
            'email' => 'zahidhossain@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);

        DB::table('users')->insert([
            'username' => 'Manik kha',
            'email' => 'manikkha@website.com',
            'password' => Hash::make('12345678'),
            'role_id' => '3'
        ]);
    }
}
