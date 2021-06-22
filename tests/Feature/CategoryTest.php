<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_category_index_can_be_rendered()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }

    public function test_post_create_can_be_rendered()
    {
        $response = $this->get('/categories/create');

        $response->assertStatus(200);
    }

    public function test_new_category_can_be_created()
    {
        $response = $this->post('/categories', [
            'name' => 'Name',
            'parent' => 'Parent',
        ]);
        
        $this->assertDatabaseHas('categories', [
            'name' => 'Name',
        ]);

        $response->assertRedirect();
    }
}
