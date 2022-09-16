<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UserRole::truncate();
        User::truncate();
        $this->call([
            UserRoleSeeder::class,
            userSeeder::class

        ]);
    }
}
