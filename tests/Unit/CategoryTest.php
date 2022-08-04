<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A unit test to check newly created category.
     *
     * @return void
     */
    public function test_newly_created_category_is_a_parent_category()
    {
        $category = Category::factory()->create();
        $parentCategory = $category->parent->name;
        $this->assertTrue($parentCategory == "Parent");
    }
}
