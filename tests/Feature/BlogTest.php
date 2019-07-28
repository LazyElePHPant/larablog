<?php

namespace Tests\Feature;

use App\Post;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    public function test_that_only_authorized_users_can_manage_a_post()
    {
        // $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        // Guests
        $this->get('/posts/create')->assertRedirect('login');

        // Users
        $this->actingAs($user)->get('/posts/create')->assertStatus(200);
    }

    public function test_a_user_can_create_a_post()
    {
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();

        $attributes = factory(Post::class)->raw();

        $this->actingAs($user)
             ->followingRedirects()
             ->post('/posts', $attributes)
             ->assertSee($attributes['title']);
    }
}
