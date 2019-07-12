<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\CommonController;
use App\Models\Produto;

class ProdutoController extends CommonController
{
    public function __construct(Produto $model)
    {
        $this->model = $model;
        $this->resource = "\App\Http\Resources\ProdutoResource";
    }
}