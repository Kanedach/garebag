<?php

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
        // $this->call(UserSeeder::class);
        factory(App\User::class, 1)->create();
        factory(App\Tenant::class, 10)->create();
        factory(App\Garbage::class, 100)->create();
    }
}
