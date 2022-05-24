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
        $this->call(DatabaseSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(UserInfoSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(PosttagSeeder::class);
    }
}
