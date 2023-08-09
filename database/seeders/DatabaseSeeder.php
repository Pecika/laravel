<?php

namespace Database\Seeders;

use App\Models\Ljubimac;
use App\Models\Pregled;
use App\Models\User;
use App\Models\Veterinar;
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


        User::truncate();
        Veterinar::truncate();
        Ljubimac::truncate();
        Pregled::truncate();


        User::factory(10)->create();
        Veterinar::factory(4)->create();
        Ljubimac::factory(10)->create();
        Pregled::factory(20)->create();

    }
}
