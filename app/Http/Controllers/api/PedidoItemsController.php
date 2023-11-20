<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\PedidoItem;


class PedidoItemsController extends Controller {

    public function index() {

        $pedidoItems = PedidoItem::with('Pedido')->get();
        return $pedidoItems;
        
    }

}