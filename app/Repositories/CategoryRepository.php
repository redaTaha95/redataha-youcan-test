<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository extends BaseRepository implements Interfaces\CategoryRepositoryInterface
{
    public function __construct(Model $category)
    {
        parent::__construct($category);
    }

    public function filterProductsByCategory(Category $category)
    {
        $category = Category::find($category);
        return $category->products;
    }
}
