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
    
        $this->call([

            CategorySeeder::class,//prima la categoria che non ha chiavi esterne 
            PostSeeder::class,
            TagSeeder::class,
        ]);

    }
}
