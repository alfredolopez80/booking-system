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
        $this->call(UserSeeder::class);
        $this->call(GeneralDataSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(BookingSeeder::class);
    }
}
