<?php

use Illuminate\Database\Seeder;
use App\Work;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 10; $i++) {
            Work::create([
                'title' => 'Новая работа '.$i,
                'description' => 'Описание новой работы '.$i,
                'image' => '',
                'site_link' => 'http://site.com',
                'github_link' => 'http://github.com',
                'published' => 1
            ]);
        }
    }
}
