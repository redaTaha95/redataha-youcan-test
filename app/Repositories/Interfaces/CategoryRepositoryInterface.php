<?php


namespace App\Repositories\Interfaces;


use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function filterProductsByCategory(Category $category);
}
