<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        //makes 5 fake users
        $users = User::factory()->count(3)->create();
        //gets one user
        $user = User::find(1);
        //sets name property
        $user->name = "Nolan";
        //saves the user
        $user->save();
    }
}
