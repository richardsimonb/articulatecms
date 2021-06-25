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

    public function test_category_show_can_be_rendered()
    {
        $category = Category::create([
            'name' => 'Name',
            'parent' => 'Parent',
        ]);

        $response = $this->get("/categories/{$category->id}");
        
        $response->assertStatus(200);
    }

    public function test_category_edit_can_be_rendered()
    {
        $category = Category::create([
            'name' => 'Name',
            'parent' => 'Parent',
        ]);

        $response = $this->get("/categories/{$category->id}/edit");

        $response->assertStatus(200);
    }

    public function test_category_can_be_updated()
    {
        $category = Category::create([
            'name' => 'Name',
            'parent' => 'Parent',
        ]);

        $response = $this->put("/categories/{$category->id}", [
            'name' => 'New Name',
            'parent' => 'New Parent',
        ]);
        
        $this->assertDatabaseHas('categories', [
            'name' => 'New Name',
        ]);

        $response->assertRedirect();
    }

}
