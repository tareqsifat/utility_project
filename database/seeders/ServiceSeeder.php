<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' =>'Washroom clean',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '500',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Gas pipeline linkage',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '500',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Water pipeline repaire',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '700',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Electric repairing',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '800',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Water tank clean',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '900',
            'rating' => '4.00',
        ]);
        DB::table('services')->insert([
            'name' =>'electric motor repairing',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '1000',
            'rating' => '4.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Gas line repairing',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '600',
            'rating' => '4.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Electric switchboard repairing',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '800',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Water supply line repairing ',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '900',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Electric line repairing',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'price' => '700',
            'rating' => '4.00',
        ]);
        
    }
}
