<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [];

//        $posts = Post::factory()->count(5)->create();
//
//        $faker = Faker::class;
//
//        $post->title = $faker->text();
//
//        $post->title = "Hello IS373";
//        $post->save();
//        //$user = $task->user;
//        $user = User::find(1);
//        $user->name = "Nolan";
//        $user->save();
//
//        $post->body = "test";
//        $post->save();
//
//        $this->assertEquals("Nolan",$user->name);
//        $posts= $user->posts;
//        //$task = $tasks;
//
//        //makes 5 fake users
//        $users = User::factory()->count(3)->create();
//        //gets one user
//        $user = User::find(1);
//        //sets name property
//        $user->name = "Nolan";
//        //saves the user
//        $user->save();
    }
}
