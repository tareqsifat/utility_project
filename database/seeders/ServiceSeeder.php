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
            'service_time' => '60',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'featured' => '0',
            'technician_id' => '2',
            'price' => '500',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Gas pipeline linkage',
            'service_time' => '50',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
             'featured' => '1',
             'technician_id' => '2',
            'price' => '500',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Water pipeline repaire',
            'service_time' => '45',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
             'featured' => '1',
             'technician_id' => '3',
            'price' => '700',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Electric repairing',
            'service_time' => '40',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
             'featured' => '1',
             'technician_id' => '3',
            'price' => '800',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Water tank clean',
            'service_time' => '43',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'featured' => '0',
            'technician_id' => '4',
              'price' => '900',
            'rating' => '4.00',
        ]);
        DB::table('services')->insert([
            'name' =>'electric motor repairing',
            'service_time' => '41',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'featured' => '0',
            'technician_id' => '4',
            'price' => '1000',
            'rating' => '4.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Gas line repairing',
             'service_time' => '38',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'featured' => '0',
            'technician_id' => '5',
            'price' => '600',
            'rating' => '4.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Electric switchboard repairing',
             'service_time' => '36',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'featured' => '0',
            'technician_id' => '5',
            'price' => '800',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Water supply line repairing ',
            'service_time' => '35',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'featured' => '0',
            'technician_id' => '3',
            'price' => '900',
            'rating' => '5.00',
        ]);
        DB::table('services')->insert([
            'name' =>'Electric line repairing',
            'service_time' => '32',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'featured' => '0',
            'technician_id' => '2',
            'price' => '700',
            'rating' => '4.00',
        ]);
        
    }
}
