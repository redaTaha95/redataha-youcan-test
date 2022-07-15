<?php


namespace App\repositories;


use App\Models\Product;

class ProductRepository extends BaseRepository implements interfaces\ProductRepositoryInterface
{

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }


}
