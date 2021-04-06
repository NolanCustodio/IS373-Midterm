<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Post;
use App\Models\User;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $post = Post::factory()->create();
        $post->title = "Hello IS373";
        $post->save();
        //$user = $task->user;
        $user = User::find(1);
        $user->name = "Nolan";
        $user->save();

        $post->body = "test";
        $post->save();

        $this->assertEquals("Nolan",$user->name);
        $posts= $user->posts;
        //$task = $tasks;
    }
}
