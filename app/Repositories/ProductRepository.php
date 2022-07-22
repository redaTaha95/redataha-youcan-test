<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository implements Interfaces\ProductRepositoryInterface
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }
}
