<?php

use Illuminate\Database\Seeder;

class ArticleTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Article::class, 5)->create();
        $this->call(UserTableSeeder::class);
        $this->call(ArticleTableSeede::class);
    }
}
