<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(5)->create();

        Category::create([
            'name'=> 'SMA X',
            'slug'=> 'sma-x'
        ]);

        Category::create([
            'name'=> 'SMA XI',
            'slug'=> 'sma-xi'
        ]);

        Category::create([
            'name'=> 'SMA XII',
            'slug'=> 'sma-xii'
        ]);

        Post::factory(20)->create();
    }
}
