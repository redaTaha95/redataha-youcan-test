<?php


namespace App\repositories;


use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository extends BaseRepository implements interfaces\CategoryRepositoryInterface
{

    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
}
