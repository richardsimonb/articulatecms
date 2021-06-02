<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_post_index_can_be_rendered()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    public function test_post_create_can_be_rendered()
    {
        $response = $this->get('/posts/create');

        $response->assertStatus(200);
    }
}
