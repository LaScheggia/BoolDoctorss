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
        $this->call(UserTableSeeder::class);
        $this->call(SponsorTableSeeder::class);
        $this->call(SpecializationTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(Specialization_userTableSeeder::class);
    }
}
