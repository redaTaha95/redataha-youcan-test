<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function attachCategoriesToProduct(Product $product, array $categories);

    public function checkIfProductRequestHasCategories(array $productRequest);
}
