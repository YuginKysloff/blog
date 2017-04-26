<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 20; $i++) {
            Post::create([
                'title' => 'Новая статья '.$i,
                'body' => 'Текст новой статьи '.$i,
                'image' => '',
                'slug' => 'novaya-statya-'.$i,
                'views' => 0,
                'published' => 1,
                'user_id' => 1,
            ]);
        }
        for($i = 21; $i < 25; $i++) {
            Post::create([
                'title' => 'Новая статья '.$i,
                'body' => 'Текст новой статьи '.$i,
                'image' => '',
                'slug' => 'novaya-statya-'.$i,
                'views' => 0,
                'published' => 0,
                'user_id' => 1,
            ]);
        }
    }
}
