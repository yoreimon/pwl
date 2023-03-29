<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // $this->call([
        //     ArticlesSeeder::class,
        // ]);
<<<<<<< HEAD
        $this->call([
            HobbySeeder::class,
=======

        // $this->call([
        //     HobbySeeder::class,
        // ]);

        // $this->call([
        //     FamilySeeder::class,
        // ]);

        $this->call([
            MataKuliahSeeder::class,
>>>>>>> c1d21601dda88c0b870af0f59a4105e49cbf11a5
        ]);
    }
}