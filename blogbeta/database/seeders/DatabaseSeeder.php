<?php

namespace Database\Seeders;

use App\Models\Xp;
use App\Models\Profile;
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
        \App\Models\User::factory(3)->create();
        \App\Models\Post::factory(3)->create();
        \App\Models\Xp::factory(3)->create();
        \App\Models\Profile::factory(3)->create();

        \DB::table('tags')->insert([
            'name'  => 'Family',
           
        ]);
        \DB::table('tags')->insert([
            'name'  => 'Friends',
           
        ]);
        \DB::table('tags')->insert([
            'name'  => 'Goto',
           
        ]);
    }
}
