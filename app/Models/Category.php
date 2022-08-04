<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the parent of the category.
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id')->withDefault([
            'name' => 'Parent',
        ]);;
    }

}
