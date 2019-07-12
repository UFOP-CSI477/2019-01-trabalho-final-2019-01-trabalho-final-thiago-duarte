<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\CommonController;
use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends CommonController
{
    public function __construct(Pedido $model)
    {
        $this->model = $model;
        $this->resource = "\App\Http\Resources\PedidoResource";
    }

    public function store(Request $request)
    {
        session_start();
        $input = $request->all();
        $input['cliente'] = $_SESSION["namelogin"];
        $model = new $this->resource($this->model::create($input));
        return $this->sendResponse($model, $this->msgSuccessCreate);
    }
}