<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends BaseRepository implements Interfaces\CategoryRepositoryInterface
{
    public function __construct(Category $category)
    {
        parent::__construct($category);
    }

    public function filterProductsByCategory(int $category_id)
    {
        $category = $this->find($category_id);
        return PHP_INT_MAX;
    }
}
