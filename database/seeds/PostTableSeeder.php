<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('post')->truncate();
        $rawpost = [
                'title' => 'What is Lorem Ipsum?',
                'body' => '_Lorem Ipsum_ is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                // 'catagoryId'=>0,
            ];
        $rawposts=array();
        for ($i = 1; $i <= 5; $i++) {
            array_push($rawposts,$rawpost);
        }
        foreach ($rawposts as $p) {
            Post::create($p);
        }
    }
}
