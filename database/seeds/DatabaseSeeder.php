<?php

use Illuminate\Database\Seeder;

use \App\Post;
use \App\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
         $first = Post::create(['description'=>"First Post"]);

         $second = Post::create(['description'=>"Second Post"]);
         $second->comments()->save(Comment::create(['comment'=>'Comment 01']));
         $second->comments()->save(Comment::create(['comment'=>'Comment 02']));
         $second->comments()->save(Comment::create(['comment'=>'Comment 03']));

         $third = Post::create(['description'=>"Third Post"]);
         $third->comments()->save(Comment::create(['comment'=>'First Comment']));
         $third->comments()->save(Comment::create(['comment'=>'Second Comment']));

         $fourth  = Post::create(['description'=>"Fourth Post"]);

         $fifth  = Post::create(['description'=>"Fifth Post"]);
         $fifth ->comments()->save(Comment::create(['comment'=>'Comment 10']));
       
      
    }
}
