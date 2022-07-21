<?php

namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface
{
    public function filterProductsByCategory(int $category_id);
}
