<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\CommonController;
use App\Models\Cliente;

class ClienteController extends CommonController
{
    public function __construct(Cliente $model)
    {
        $this->model = $model;
        $this->resource = "\App\Http\Resources\ClienteResource";
    }
}