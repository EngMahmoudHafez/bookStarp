<?php

namespace Database\Seeders;

use Database\Factories\UserBookFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserBookFactory::new()->count(10)->create();
    }
}
