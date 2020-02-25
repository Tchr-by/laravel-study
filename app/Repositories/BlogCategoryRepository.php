<?php

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Illuminate\Database\Eloquent\Collection;

class BlogCategoryRepository extends CoreRepository 
{
    protected function getModelClass() {
        return Model::class;
    }
}