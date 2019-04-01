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
        //carico la classe seeder
        // $this->call(UsersTableSeeder::class);
        $this->call(LocalsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}
