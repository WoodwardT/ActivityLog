<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(1)->create(['email'=> 'a@a.com']);
        \App\Models\Activity::factory(5)->create();
        \App\Models\Detail::factory(1)->create(['activity_id'=> 1]);
        \App\Models\Detail::factory(1)->create(['activity_id'=>2]);
        \App\Models\Detail::factory(1)->create(['activity_id'=>3]);
        \App\Models\Detail::factory(1)->create(['activity_id'=>4]);
        \App\Models\Detail::factory(1)->create(['activity_id'=>5]);
    }
}
