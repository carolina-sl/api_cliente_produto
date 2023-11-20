<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\PedidoItem;


class ProdutosController extends Controller {

    public function index() {

        $produtos = Produto::with('PedidoItem')->get();
        return $produtos;    
    }

    public function store(Request $request) {
        return response()->json(Produto::create($request->all()), 201);
    }


}