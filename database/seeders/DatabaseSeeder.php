<?php

namespace Database\Seeders;

use App\Models\ServisModel;
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

        \App\Models\ServisModel::factory(10)->create();
    }
}
