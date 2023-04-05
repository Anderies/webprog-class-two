<?php

namespace Database\Seeders;


use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Post::factory(5)->has(Comment::factory()->count(3))->create();
        // Post::factory(5)->has(Comment::factory()->count(3))->create();
        // Post::factory(5)

        Post::factory(5)->has(Comment::factory()->count(2))->create();
        // Post::factory()->count(10)->create();

        // Post::factory(5)->create()->each(function($post){
        //     $post->comments->saveMany(Comment::factory(5))->make());
        // });
    }
}
