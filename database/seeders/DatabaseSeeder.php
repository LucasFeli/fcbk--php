<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Like;
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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Like::factory(8)->create();
        $this->call(PostSeeder::class);

    }
}
