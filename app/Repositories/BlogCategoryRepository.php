<?php

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Illuminate\Database\Eloquent\Collection;

class BlogCategoryRepository extends CoreRepository 
{
    protected function getModelClass() {
        return Model::class;
    }

    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    public function getForComboBox()
    {
        $columns = implode(', ', [
            'id',
            'CONCAT (id, ". ", title) AS id_title',
        ]);

        $result = $this->
                    startConditions()->
                    selectRaw($columns)->
                    toBase()->
                    get();
            //dd($result->first());
        return $result;

    }

    public function getAllWithPaginate($perPage = null) 
    {
        $columns = ['id','title','parent_id'];

        $result = $this->startConditions()->select($columns)->paginate($perPage);
        
        return $result;

    }
}