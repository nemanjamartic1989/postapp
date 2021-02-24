<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{

    public function run()
    {
        $post1 = new Post();
        $post1->title = 'First Post';
        $post1->body = 'Lorem ipsum';
        $post1->author = 'Milos';
        $post1->save();

        $post2 = new Post();
        $post2->title = 'Second Post';
        $post2->body = 'Lorem ipsum';
        $post2->author = 'Nikola';
        $post2->save();
    }
}
