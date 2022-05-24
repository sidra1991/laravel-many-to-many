<?php

use Illuminate\Database\Seeder;
use App\post;
use Faker\Generator as Faker;
//use App\Categoy;
//use App\User;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $newPost = new Post();
            $newPost->user_id = rand(1,10);
            $newPost->title = 'titolo di prova' . $i;
            //$newPost->category_id = rand(1,5);
            $newPost->content = $faker->text(rand(50, 100));
            $newPost->slug = 'slug-fake' . $i ;
            $newPost->save();
        };
    }
}
