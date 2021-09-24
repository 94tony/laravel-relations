<?php

use App\Author;
use App\Article;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($fakes=0; $fakes < 10; $fakes++) {

            $author=new Author();
            $author->name = $faker->name();
            $author->surname = $faker->name();
            $author->email = $faker->email();
            $author->save();

            $article=new Article();
            $article->title = $faker->sentence(3);
            $article->content = $faker->paragraph(4);
            $article->author_id = $author->id;
            $article->image = $faker->imageUrl(640, 480, 'animals', true, 'cats');
            $article->save();
        }
    }
}
