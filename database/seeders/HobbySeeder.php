<?php

namespace Database\Seeders;

use App\Models\Hobby;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hobby::Factory()->count(2)->create();
    }
}