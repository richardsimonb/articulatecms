<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    
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

    public function test_new_post_can_be_created()
    {
        $response = $this->post('/posts', [
            'title' => 'Title',
            'body' => 'Text example',
            'category' => 'New',
            'author' => 'Author',
        ]);
        
        $this->assertDatabaseHas('posts', [
            'title' => 'Title',
        ]);

        $response->assertRedirect();
    }

    public function test_post_edit_can_be_rendered()
    {
        $response = $this->get('/posts/edit');

        $response->assertStatus(200);
    }
}
